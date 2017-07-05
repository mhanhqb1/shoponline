<?php

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

$modelName = 'Products';

// Load detail
$data = null;
$pageTitle = 'Thêm mới sản phẩm';
if (!empty($id)) {
    $param['id'] = $id;
    $data = $this->$modelName->getDetail($param);
    $pageTitle = 'Chi tiết sản phẩm';
    if (empty($data)) {
        AppLog::info("Product unavailable", __METHOD__, $param);
        throw new NotFoundException("Product unavailable", __METHOD__, $param);
    }
} else {
    throw new NotFoundException();
}

$this->_pageTitle = $pageTitle;

// Create breadcrumb
$listPageUrl = h($this->BASE_URL . '/admin/products');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'link' => $listPageUrl,
            'name' => __('LABEL_PRODUCT_LIST'),
        ))
        ->add(array(
            'name' => $pageTitle,
        ));

$categories = TableRegistry::get('Categories');
$categoriesData = $this->Common->arrayKeyValue($categories->getAll(), 'id', 'name');

// Create Update form 
$form = new App\Form\UpdateProductForm();
$this->UpdateForm->reset()
        ->setModel($form)
        ->setData($data)
        ->setAttribute('autocomplete', 'off')
        ->addElement(array(
            'id' => 'id',
            'type' => 'hidden',
            'label' => __('id'),
        ))
        ->addElement(array(
            'id' => 'title',
            'label' => __('LABEL_NAME'),
            'required' => true,
//        'readonly' => !empty($id),
        ))
        ->addElement(array(
            'id' => 'category',
            'label' => __('LABEL_CATEGORY'),
            'options' => $categoriesData,
            'required' => true
        ))
        ->addElement(array(
            'id' => 'detail',
            'label' => __('LABEL_DETAIL'),
            'type' => 'editor',
            'height' => '300px',
            'required' => true,
        ))
        ->addElement(array(
            'type' => 'submit',
            'value' => __('LABEL_SAVE'),
            'class' => 'btn btn-primary',
        ));

// Valdate and update
if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        if (is_scalar($value)) {
            $data[$key] = trim($value);
        }
    }

    // Validation
    if ($form->validate($data)) {
        // Call API to Login
        $data['login_id'] = !empty($data['login']) ? $data['login'] : '';
        $id = Api::call(Configure::read('API.url_admins_addupdate'), $data);
        if (!empty($id) && !Api::getError()) {
            // Update current logged-in
            $user = $this->Auth->user();
            if ($id == $user['id']) {
                $user['login_id'] = $data['login_id'];
                $user['name'] = $data['name'];
                $user['admin_type'] = $data['admin_type'];
                $user['display_name'] = !empty($data['name']) ? $data['name'] : $data['login_id'];

                $this->Auth->setUser($user);
                $this->AppUI = $user;
            }

            $this->Flash->success(__('MESSAGE_SAVE_OK'));
            return $this->redirect("/{$this->controller}/update/{$id}");
        } else {
            return $this->Flash->error(__('MESSAGE_SAVE_NG'));
        }
    }
}

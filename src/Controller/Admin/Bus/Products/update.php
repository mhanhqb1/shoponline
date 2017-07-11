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
            'id' => 'image_path',
            'type' => 'file',
            'image' => true,
            'label' => __('LABEL_IMAGE'),
//            'allowEmpty' => true
        ))
        ->addElement(array(
            'id' => 'detail',
            'label' => __('LABEL_DETAIL'),
            'type' => 'editor',
            'height' => '300px',
            'required' => true,
        ))
        ->addElement(array(
            'id' => 'price',
            'label' => __('LABEL_PRICE'),
        ))
        ->addElement(array(
            'type' => 'submit',
            'value' => __('LABEL_SAVE'),
            'class' => 'btn btn-primary',
        ));

// Valdate and update
if ($this->request->is('post')) {
    // Trim data
    $values = $this->request->getData();
    
    if (empty($data)) {
        $data = $this->$modelName->newEntity();
    }
    
    // Validation
    if ($form->validate($values)) {
        if (!empty($_FILES['image_path']['name'])) {
            $values['image_path'] = $this->Image->uploadImage(
                $_FILES['image_path'], ''
            );
        } elseif (!empty($values['image_path']['remove'])) {
            $values['image_path'] = '';
        } else {
            $values['image_path'] = $data->image_path;
        }
        $entity = $this->$modelName->patchEntity($data, $values);
        if ($this->$modelName->save($entity)) {
            $this->Flash->success(__('Cập nhật thành công.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Lỗi.'));
    }
}

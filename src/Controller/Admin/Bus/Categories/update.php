<?php

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

$modelName = 'Categories';

// Load detail
$data = null;
$pageTitle = __('LABEL_CATEGORY_ADD');
if (!empty($id)) {
    $param['id'] = $id;
    $data = $this->$modelName->getDetail($param);
    $pageTitle = __('LABEL_CATEGORY_UPDATE');
    if (empty($data)) {
        AppLog::info("Category unavailable", __METHOD__, $param);
        throw new NotFoundException("Category unavailable", __METHOD__, $param);
    }
} else {
    $id = true;
}

$this->_pageTitle = $pageTitle;

// Create breadcrumb
$listPageUrl = h($this->BASE_URL . '/admin/categories');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'link' => $listPageUrl,
            'name' => __('LABEL_CATEGORY_LIST'),
        ))
        ->add(array(
            'name' => $pageTitle,
        ));
$categoriesData = $this->Common->arrayKeyValue($this->$modelName->getAll(array('id' => $id)), 'id', 'name');

// Create Update form 
$form = new App\Form\UpdateCategoryForm();
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
            'id' => 'name',
            'label' => __('LABEL_NAME'),
            'required' => true,
//        'readonly' => !empty($id),
        ))
        ->addElement(array(
            'id' => 'root_id',
            'label' => __('LABEL_PARENT_CATEGORY'),
            'options' => $categoriesData,
            'empty' => '-'
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
        $entity = $this->$modelName->patchEntity($data, $values);
        if ($this->$modelName->save($entity)) {
            $this->Flash->success(__('Cập nhật thành công.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Lỗi.'));
    }
}

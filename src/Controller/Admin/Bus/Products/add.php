<?php
use Cake\ORM\TableRegistry;

$modelName = 'Products';
$err = array();
$this->_pageTitle = 'Thêm sản phẩm';

$categories = TableRegistry::get('Categories');
$categoriesData = $this->Common->arrayKeyValue($categories->find('all'), 'id', 'name');

$displayFields = array(
    'title' => array(
        'title' => 'Tên'
    ),
    'category' => array(
        'title' => 'Danh mục',
        'options' => $categoriesData
    ),
    'detail' => array(
        'title' => 'Chi tiết',
        'textarea' => true
    ),
);
$this->set('displayFields', $displayFields);
if ($this->request->is('post')) {
    $entity = $this->$modelName->newEntity();
    $entity = $this->$modelName->patchEntity($entity, $this->request->getData());
    if ($this->$modelName->save($entity)) {
        $this->Flash->success(__('Your article has been saved.'));
        return $this->redirect(['action' => 'index']);
    }
    $this->Flash->error(__('Unable to add your product.'));
}
$this->set('err', $err);
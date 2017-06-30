<?php
use Cake\ORM\TableRegistry;

if (empty($id)) {
    die();
}
$modelName = 'Products';
$err = array();
$this->_pageTitle = 'Chỉnh sửa sản phẩm';

$data = $this->$modelName->get($id);
if (empty($data)) {
    die('Không tìm thấy sản phẩm');
}

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

$this->set('data', $data);
$this->set('displayFields', $displayFields);

if ($this->request->is('post')) {
    $entity = $this->$modelName->patchEntity($data, $this->request->getData());
    if ($this->$modelName->save($entity)) {
        $this->Flash->success(__('Your article has been saved.'));
        return $this->redirect(['action' => 'index']);
    }
    $this->Flash->error(__('Unable to add your product.'));
}
$this->set('err', $err);
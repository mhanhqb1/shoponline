<?php
$modelName = 'Categories';
$err = array();
$this->_pageTitle = 'Thêm danh mục sản phẩm';
$displayFields = array(
    'name' => array(
        'title' => 'Tên'
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
    $this->Flash->error(__('Unable to add your category.'));
}
$this->set('err', $err);
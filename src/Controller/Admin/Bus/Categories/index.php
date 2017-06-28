<?php
$modelName = 'Categories';
$this->_pageTitle = 'Danh sách danh mục sản phẩm';
$displayFields = array(
    'id' => array(
        'title' => 'ID'
    ),
    'name' => array(
        'title' => 'Tên'
    ),
//    'discount' => array(
//        'title' => 'Giam gia'
//    )
);
$data = $this->$modelName->find('all');
$this->set('data', $data);
$this->set('displayFields', $displayFields);

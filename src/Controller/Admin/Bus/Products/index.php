<?php
$modelName = 'Products';
$this->_pageTitle = 'Danh sách sản phẩm';
$displayFields = array(
    'id' => array(
        'title' => 'ID'
    ),
    'title' => array(
        'title' => 'Tên'
    ),
    'category' => array(
        'title' => 'Danh mục'
    ),
    'detail' => array(
        'title' => 'Chi tiết'
    ),
//    'discount' => array(
//        'title' => 'Giam gia'
//    )
);
$data = $this->$modelName->find('all');
$this->set('data', $data);
$this->set('displayFields', $displayFields);

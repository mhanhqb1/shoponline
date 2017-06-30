<?php
use Cake\ORM\TableRegistry;

$modelName = 'Products';
$this->_pageTitle = 'Danh sách sản phẩm';

$categories = TableRegistry::get('Categories');
$categoriesData = $this->Common->arrayKeyValue($categories->find('all'), 'id', 'name');

$displayFields = array(
    'id' => array(
        'title' => 'ID',
        'width' => 50
    ),
    'title' => array(
        'title' => 'Tên'
    ),
    'category' => array(
        'title' => 'Danh mục',
        'options' => $categoriesData
    ),
    'detail' => array(
        'title' => 'Chi tiết'
    ),
);
$data = $this->$modelName->find('all');
$this->set('data', $data);
$this->set('displayFields', $displayFields);

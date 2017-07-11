<?php
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

$data = array();

$param = array(
    'page' => 1,
    'limit' => 5
);
$products = TableRegistry::get('Products');
$productsData = $products->getList($param);
$data['products'] = $productsData;

$this->set('data', $data);
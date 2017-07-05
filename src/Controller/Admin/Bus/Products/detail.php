<?php

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;

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

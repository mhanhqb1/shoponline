<?php

use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$modelName = 'Products';
$pageTitle = 'Danh sách sản phẩm';
$this->_pageTitle = $pageTitle;
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'name' => $pageTitle,
        ));

$categories = TableRegistry::get('Categories');
$categoriesData = $this->Common->arrayKeyValue($categories->getAll(), 'id', 'name');

// Create search form
$this->SearchForm
        ->setAttribute('type', 'get')
        ->addElement(array(
            'id' => 'name',
            'label' => __('LABEL_NAME')
        ))
        ->addElement(array(
            'id' => 'category',
            'label' => __('LABEL_CATEGORY'),
            'options' => $categoriesData,
            'empty' => __('LABEL_SELECT_ALL')
        ))
        ->addElement(array(
            'id' => 'limit',
            'label' => __('LABEL_LIMIT'),
            'options' => Configure::read('Config.PageLimit')
        ))
        ->addElement(array(
            'type' => 'submit',
            'value' => __('LABEL_SEARCH'),
            'class' => 'btn btn-primary',
        ));

// Load data
$param = $this->getParams(
        array(
            'page' => 1,
            'limit' => Configure::read('Config.PaginationLimit')
        )
);
$result = $this->$modelName->getList($param);
$total = !empty($result['total']) ? $result['total'] : 0;
$data = !empty($result['data']) ? $result['data'] : array();
$this->set('total', $total);
$this->set('limit', $param['limit']);

// Show data
$this->SimpleTable->addColumn(array(
            'id' => 'item',
            'name' => 'items[]',
            'type' => 'checkbox',
            'value' => '{id}',
            'witd' => '20'
        ))
        ->addColumn(array(
            'id' => 'id',
            'title' => __('LABEL_ID'),
            'type' => 'link',
            'value' => '{id}',
            'href' => $this->BASE_URL . '/admin/' . $this->controller . '/update/{id}',
            'width' => 80,
        ))
        ->addColumn(array(
            'id' => 'title',
            'title' => __('LABEL_NAME'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'category',
            'title' => __('LABEL_CATEGORY'),
            'rules' => $categoriesData,
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'price',
            'title' => __('LABEL_PRICE'),
            'empty' => '',
            'width' => 120,
        ))
        ->addColumn(array(
            'id' => 'edit',
            'title' => __('LABEL_EDIT'),
            'type' => 'link',
            'value' => '{id}',
            'href' => $this->BASE_URL . '/admin/' . $this->controller . '/update/{id}',
            'width' => 80,
        ))
        ->addColumn(array(
            'id' => 'delete',
            'title' => __('LABEL_DELETE'),
            'type' => 'link',
            'value' => '{id}',
            'href' => $this->BASE_URL . '/' . $this->controller . '/edit/{id}',
            'width' => 80,
        ))
        ->setDataset($data)
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_ADD_NEW'),
            'class' => 'btn btn-success btn-addnew',
        ));

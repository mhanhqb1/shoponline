<?php

use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$modelName = 'Sliders';
$pageTitle = __('LABEL_SLIDERS_LIST');
$this->_pageTitle = $pageTitle;
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'name' => $pageTitle,
        ));

// Create search form
$this->SearchForm
        ->setAttribute('type', 'get')
        ->addElement(array(
            'id' => 'id',
            'label' => __('ID')
        ))
        ->addElement(array(
            'id' => 'priority',
            'label' => __('LABEL_PRIORITY')
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
            'id' => 'id',
            'title' => __('LABEL_ID'),
            'type' => 'link',
            'value' => '{id}',
            'href' => $this->BASE_URL . '/admin/' . $this->controller . '/update/{id}',
            'width' => 80,
        ))
        ->addColumn(array(
            'id' => 'image_path',
            'type' => 'image',
            'title' => __('LABEL_IMAGE'),
            'src' => '{image_path}',
            'width' => 120,
        ))
        ->addColumn(array(
            'id' => 'url',
            'title' => __('LABEL_LINK'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'priority',
            'title' => __('LABEL_PRIORITY'),
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
            'button' => 'edit'
        ))
        ->addColumn(array(
            'title' => __('LABEL_DELETE'),
            'type' => 'link',
            'href' => $this->BASE_URL . '/admin/' . $this->controller . '/delete/{id}',
            'onclick' => "return confirm('" . __('MESSAGE_CONFIRM_DELETE') . "')",
            'width' => 80,
            'button' => 'delete'
        ))
        ->setDataset($data)
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_ADD_NEW'),
            'class' => 'btn btn-success btn-addnew',
        ));

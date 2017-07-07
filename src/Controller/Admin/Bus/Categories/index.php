<?php
use Cake\Core\Configure;

$modelName = 'Categories';

// Create breadcrumb
$pageTitle = __('LABEL_CATEGORY_LIST');
$this->_pageTitle = $pageTitle;
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'name' => $pageTitle,
    ));

// Create search form
$this->SearchForm
    ->setAttribute('type', 'get')
    ->addElement(array(
        'id' => 'name',
        'label' => __('LABEL_NAME')
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
$categoriesData = $this->Common->arrayKeyValue($data, 'id', 'name');
$this->set('total', $total);
$this->set('limit', $param['limit']);

// Show data
$this->SimpleTable->addColumn(array(
        'id' => 'id',
        'title' => __('LABEL_ID'),
        'type' => 'link',
        'value' => '{id}',
        'href'  => $this->BASE_URL . '/' . $this->controller . '/update/{id}',
        'width' => 80,
    ))
    ->addColumn(array(
        'id' => 'name',
        'title' => __('LABEL_NAME'),
        'emtpy' => ''
    ))
    ->addColumn(array(
        'id' => 'root_id',
        'title' => __('LABEL_PARENT_CATEGORY'),
        'rules' => $categoriesData,
        'empty' => '',
        'width' => 300
    ))   
    ->addColumn(array(
        'id' => 'edit',
        'title' => __('LABEL_EDIT'),
        'type' => 'link',
        'value' => '{id}',
        'href'  => $this->BASE_URL . '/admin/' . $this->controller . '/update/{id}',
        'width' => 80,
        'button' => 'edit'
    ))
    ->addColumn(array(
        'id' => 'delete',
        'title' => __('LABEL_DELETE'),
        'type' => 'link',
        'href'  => $this->BASE_URL . '/admin/' . $this->controller . '/delete/{id}',
        'width' => 80,
        'onclick' => "return confirm('" . __('MESSAGE_CONFIRM_DELETE') . "')",
        'button' => 'delete'
    ))
    ->setDataset($data)
    ->addButton(array(
        'type' => 'submit',
        'value' => __('LABEL_ADD_NEW'),
        'class' => 'btn btn-success btn-addnew',
    ));
<?php
$modelName = 'Categories';

// Create breadcrumb
$pageTitle = 'Danh sách danh mục sản phẩm';
$this->_pageTitle = $pageTitle;
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'name' => $pageTitle,
    ));

// Create search form
$this->SearchForm
    ->setAttribute('type', 'get')
    ->addElement(array(
        'id' => 'login',
        'label' => __('LABEL_ADMIN_LOGIN_ID')
    ))
    ->addElement(array(
        'id' => 'name',
        'label' => __('LABEL_NAME')
    ))
    ->addElement(array(
        'id' => 'sort',
        'label' => __('LABEL_SORT'),
        'options' => array(
            'created-asc' => __('LABEL_CREATED_ASC'),
            'created-desc' => __('LABEL_CREATED_DESC'),
            'updated-asc' => __('LABEL_UPDATED_ASC'),
            'updated-desc' => __('LABEL_UPDATED_DESC'),
        )
    ))
    ->addElement(array(
        'id' => 'limit',
        'label' => __('LABEL_LIMIT')
    ))
    ->addElement(array(
        'type' => 'submit',
        'value' => __('LABEL_SEARCH'),
        'class' => 'btn btn-primary',
    ));

$data = $this->$modelName->find('all');
$this->set('total', 10);
$this->set('limit', 10);

// Show data
$this->SimpleTable->addColumn(array(
        'id' => 'item',
        'name' => 'items[]',
        'type' => 'checkbox',
        'value' => '{id}',
        'width' => 20
    ))
    ->addColumn(array(
        'id' => 'id',
        'title' => __('LABEL_ID'),
        'type' => 'link',
        'value' => '{id}',
        'href'  => $this->BASE_URL . '/' . $this->controller . '/edit/{id}',
        'width' => 80,
    ))
    ->setDataset($data)
    ->addButton(array(
        'type' => 'submit',
        'value' => __('LABEL_ADD_NEW'),
        'class' => 'btn btn-success btn-addnew',
    ))
    ->addButton(array(
        'type' => 'submit',
        'value' => __('LABEL_DISABLE'),
        'class' => 'btn btn-danger btn-disable',
    ))
    ->addButton(array(
        'type' => 'submit',
        'value' => __('LABEL_ENABLE'),
        'class' => 'btn btn-primary btn-enable',
    ));
<?php

$err = array();
$displayFields = $this->Products->_displayField;
$products = $this->Products->get($id);
$this->set('data', $products);
$this->set('displayFields', $displayFields);
$this->set('err', $err);
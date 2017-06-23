<?php

$displayFields = $this->Products->_displayField;
$products = $this->Products->find('all');
$this->set('data', $products);
$this->set('displayFields', $displayFields);
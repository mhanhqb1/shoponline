<?php

	$gv_class_product = new MATHANG;
	$data = $gv_class_product->List_alls();
	
	require "views/master/product/views_list_hot.php";
?>
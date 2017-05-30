<?php
	$mid = $_GET['mid'];
	
	$gv_class_product = new MATHANG;
	$gv_class_product->Del($mid);
	
	require "views/master/product/views_result_del.php";
?>
<?php
	$gv_class_product = new MATHANG;
	$type = $_POST['rdo_search'];
	$content = $_POST['txt_search_content'];
	
	$data = $gv_class_product->Master_search($type, $content);
		
	require "views/master/product/views_result_search.php";
?>
<?php
	$gv_class_product = new MATHANG;
	$data = $gv_class_product->Max_rating();
	
	$mid = $data['mid'];
	$gv_class_product = new MATHANG;
	$gv_class_product->set_Mid($mid);
	$data = $gv_class_product->Details();
	$info = $gv_class_product->Info();
	
	$gv_class_cm = new COMMENT;
	$gv_class_cm->set_Mid($mid);
	$comment = $gv_class_cm->List_comment();
	
	$flag_rating = 1;
	
	require "views/product/views_details_product.php";
?>
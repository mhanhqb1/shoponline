<?php
	$mid = $_GET['mid'];
	$gv_class_product = new MATHANG;
	$gv_class_product->set_Mid($mid);
	$info = $gv_class_product->Info();
	$techspec = $gv_class_product->Details();
	require "views/master/product/views_edit_form.php";
?>
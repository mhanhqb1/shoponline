<?php
	 
	$gv_class_cart = new CART;
	$gv_class_cart->set_Uid($_SESSION['ses_id']);	
	$data = $gv_class_cart->List_cart();
	
	$gv_class_product = new MATHANG;
	$product = $gv_class_product->List_alls();
	require "views/user/views_history.php";
?>
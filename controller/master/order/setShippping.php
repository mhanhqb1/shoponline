<?php
	$gv_class_cart = new CART;
	$mahoadon = $_POST['input_text_mhd'];
	$gv_class_cart->Set_shipping($mahoadon);
	require "views/master/order/views_result_set_shipping.php";
?>
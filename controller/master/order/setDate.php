<?php
	$gv_class_cart = new CART;
	$mahoadon = $_POST['input_text_mhd'];
	$date = $_POST['select_day']. "-" . $_POST['select_month']. "-" . $_POST['input_text_year'];
	
	$gv_class_cart->Set_date($mahoadon, $date);
	require "views/master/order/views_result_set_date.php";
?>
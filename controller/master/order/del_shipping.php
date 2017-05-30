<?php
	$gv_class_cart = new CART;
	$gv_class_cart->Delete_ddh_shipping($_GET['ddh']);	
	require "views/master/order/views_result_del_ddh_shipping.php";
?>
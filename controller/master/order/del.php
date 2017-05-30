<?php
	$gv_class_cart = new CART;
	$gv_class_cart->Delete_ddh($_GET['ddh']);	
	require "views/master/order/views_result_del_ddh.php";
?>
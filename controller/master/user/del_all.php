<?php
	$gv_class_user = new USER;
	$user = $gv_class_user->Get_user_info($_GET['u']);
	$gv_class_user->Delete($_GET['u']);
	
	$gv_class_cart = new CART;
	$gv_class_cart->Delete_all_uid($user['uid']);
	
	require "views/master/user/views_result_del_user.php";
?>
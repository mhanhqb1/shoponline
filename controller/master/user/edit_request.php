<?php
	$gv_class_user = new USER;
	
	$data = $gv_class_user->Get_user_info($_GET['u']);
	
	require "views/master/user/views_edit_user_form.php";
?>
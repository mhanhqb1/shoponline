<?php
	$gv_class_user = new USER;
	$gv_class_user->Delete($_GET['u']);	
	
	require "views/master/user/views_result_del_user.php";
?>
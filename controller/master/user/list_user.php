<?php
	$gv_class_user = new USER;
	$data = $gv_class_user->List_all();
	require "views/master/user/views_list_user.php";
?>
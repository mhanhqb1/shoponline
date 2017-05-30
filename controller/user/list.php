<?php
	$gv_class_user = new USER;
	$list = $gv_class_user->List_all();
	require "views/user/list_view.php";
?>
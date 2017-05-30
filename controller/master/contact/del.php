<?php
	$gv_class_user = new USER;
	$id = $_GET['id'];
	$gv_class_user->Del_contact($id);
	require "views/master/contact/views_result_del.php";
?>
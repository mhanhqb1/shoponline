<?php
	$gv_class_user = new USER;
	$data = $gv_class_user->List_contact();
	
	require "views/master/contact/views_list_contact.php";
?>
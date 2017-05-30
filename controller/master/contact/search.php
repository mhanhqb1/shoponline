<?php
	$gv_class_user = new USER;
	$content = $_POST['txt_search_content'];
	$type = $_POST['rdo_search'];
	$data = $gv_class_user->Search_contact($type, $content);
	$flag_search = 1;
	require "views/master/contact/views_list_contact.php";
?>
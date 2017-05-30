<?php
	$gv_class_user = new USER;
	$type = $_POST['rdo_search'];
	$content = $_POST['txt_search_content'];
	$data = $gv_class_user->Master_search($type, $content);
	
	require "views/master/user/views_result_search_user.php";
?>
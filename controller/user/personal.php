<?php
	$gv_class_user = new USER;
	$data = $gv_class_user->Get_user_info($_SESSION['ses_username']);
	require "views/user/views_personal_form.php";
?>
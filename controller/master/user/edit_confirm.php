<?php
	$gv_class_user = new USER;
	if(
		isset($_POST['input_text_username']) &&
		isset($_POST['select_level']) &&
		isset($_POST['input_text_password']) &&
		isset($_POST['input_text_email']) &&		
		isset($_POST['input_text_firstname']) &&
		isset($_POST['input_text_lastname']) &&
		isset($_POST['input_text_idnum']) &&
		isset($_POST['select_day']) &&
		isset($_POST['select_month']) &&
		isset($_POST['input_text_year']) &&
		isset($_POST['rdo_sex']) &&
		isset($_POST['input_text_address']) &&
		isset($_POST['input_text_phonenumber'])
	){
		$gv_class_user->set_Username($_POST['input_text_username']);
		$gv_class_user->set_Level($_POST['select_level']);
		$gv_class_user->set_Password($_POST['input_text_password']);
		$gv_class_user->set_Email($_POST['input_text_email']);		
		$gv_class_user->set_Firstname($_POST['input_text_firstname']);
		$gv_class_user->set_Lastname($_POST['input_text_lastname']);
		$gv_class_user->set_Idnum($_POST['input_text_idnum']);
		$gv_class_user->set_Birthday($_POST['select_day'].'-'.$_POST['select_month'].'-'.$_POST['input_text_year']);
		$gv_class_user->set_Sex($_POST['rdo_sex']);
		$gv_class_user->set_Address($_POST['input_text_address']);
		$gv_class_user->set_Phone($_POST['input_text_phonenumber']);
		
		$gv_class_user->Master_edit();
		require "views/master/user/views_result_edit_user.php";
		
	}
	
?>
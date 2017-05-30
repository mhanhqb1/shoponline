<?php
	$gv_class_user = new USER;
	if(
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
		
		$gv_class_user->set_Username($_SESSION['ses_username']);
		$gv_class_user->set_Password($_POST['input_text_password']);
		$check_password = $gv_class_user->Check_login();
		if($check_password != FALSE){
			$gv_class_user->set_Email($_POST['input_text_email']);		
			$gv_class_user->set_Firstname($_POST['input_text_firstname']);
			$gv_class_user->set_Lastname($_POST['input_text_lastname']);
			$gv_class_user->set_Idnum($_POST['input_text_idnum']);
			$gv_class_user->set_Birthday($_POST['select_day'].'-'.$_POST['select_month'].'-'.$_POST['input_text_year']);
			$gv_class_user->set_Sex($_POST['rdo_sex']);
			$gv_class_user->set_Address($_POST['input_text_address']);
			$gv_class_user->set_Phone($_POST['input_text_phonenumber']);
			
			$gv_class_user->Update_personal();
			$result = "Done!";			
		}else{
			$result = "Error!";	
		}
		require "views/user/views_result_update_personal.php";
	}
		
?>
<?php
	$gv_class_user = new USER;
	if(
		isset($_POST['input_text_username']) &&
		isset($_POST['input_text_old_password']) &&
		isset($_POST['input_text_password'])
	){		
		$data = $gv_class_user->Get_user_info($_POST['input_text_username']);
		$result = "";
		if($data['password'] == $_POST['input_text_old_password']){
			$gv_class_user->Change_password($_POST['input_text_username'], $_POST['input_text_password']);
			$result = "Done!";
		}else{
			$result = "Error!";	
		}
		
		require "views/user/views_result_change_password.php";	
	}
		
?>
<?php
	
	if(
		isset($_POST['input_text_username']) &&
		isset($_POST['input_text_email']) &&
		isset($_POST['input_text_password'])
	){		
		$gv_class_user = new USER;
		$gv_class_user->set_Username($_POST['input_text_username']);
		$check_user_exist = $gv_class_user->Check_user_exist();
		
		if($check_user_exist == FALSE){ // Có tồn tại
			$data = $gv_class_user->Get_user_info($_POST['input_text_username']);
			if($data['email'] == $_POST['input_text_email']){
				$gv_class_user->Change_password($_POST['input_text_username'], $_POST['input_text_password']);
				$_SESSION['ses_username'] = $data['username'];
				$_SESSION['ses_id'] = $data['uid'];
				$_SESSION['ses_level'] = $data['level'];
				$result = "Done!";
			}else{
				$result = "False_email!";	//Email không đúng
			}
			
			
		}else{
			$result = 'not_exist';
		}
		
		require "views/user/views_result_change_password.php";	
	}
		
?>
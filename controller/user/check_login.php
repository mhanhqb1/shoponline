<?php
	if(isset($_POST['txt_username']) && isset($_POST['txt_password'])){
		$gv_class_user = new USER;
		$gv_class_user->set_Username($_POST['txt_username']);
		$gv_class_user->set_Password($_POST['txt_password']);
		$data = $gv_class_user->Check_Login();
		if($data != FALSE){
			foreach($data as $item){
				$_SESSION['ses_id'] = $item['uid'];
				$_SESSION['ses_username'] = $item['username'];
				$_SESSION['ses_level'] = $item['level'];
			}
			
			
			$gv_class_cart = new CART;
			$gv_class_cart->set_Uid($_SESSION['ses_id']);
			$datacart = $gv_class_cart->List_cart();
			
			if($datacart != FALSE){
				$count = 0; // Đếm dố lượng sản phẩm có trong giỏ
				foreach($datacart as $item){
					if($item['tinhtrang'] == 'cart'){
						$count++;
					}
				}				
				$_SESSION['ses_cart'] = $count;
			}else{
				$_SESSION['ses_cart'] = 0;	
			}
			
			$result = 'ok';
		}else{
			$result = 'err';
		}
		
	}else{
		$result = 'err';
	}
	
	require "views/user/views_login.php";
?>
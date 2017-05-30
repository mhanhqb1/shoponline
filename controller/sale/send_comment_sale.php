<?php	
	include("library/captcha/securimage.php");
	$img = new Securimage();
	$valid = $img->check($_POST['code']);
	
	if(isset($_POST['txt_email'])){
		$rule = "/^[a-zA-Z]{1}[a-zA-Z0-9._]{5,}\@[a-zA-Z0-9]{3,}\.[a-zA-Z.]{2,8}$/";
		if(preg_match($rule, $_POST['txt_email'])){
					
		}else{
			$email_err = 1;		
		}
		
		if($valid != true) {
			$code_err = 1;
		}
		
		if(isset($email_err) || isset($code_err)){
			require "views/sale/views_result_send_comment_sale_err.php";		
		}else{
			if(isset($_POST['txt_id'])){
				$nid = $_POST['txt_id'];
				$ten = $_POST['txt_ten'];
				$email = $_POST['txt_email'];
				
				$noidung = $_POST['txta_content'];
				$noidung = htmlspecialchars($noidung);
				
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				$today = date("H:i:s d/m/Y");
					
				$gv_class_news = new NEWS;
				$gv_class_news->Send_comment_sale($nid, $ten, $email, $noidung, $today);
				
				require "views/sale/views_result_send_comment_sale.php";	
			}else{echo "
				<script type='text/javascript'>
					window.location='".$url."gio-hang.html';
				</script>";
			}	
		}
	}	
?>
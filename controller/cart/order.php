<?php
	$gv_class_cart = new CART;
	//Trường hợp NgânLượng.vn trả về kết quả sau khi khách hàng chuyển khoản
	if(isset($_GET['checkoutonline'])){
		$gv_class_cart = new CART;
		if(isset($_SESSION['ses_id'])){
			$gv_class_cart->Order_for_user(
				$_SESSION['ses_id'], 
				$_SESSION['ses_ch_diachi'],
				$_SESSION['ses_ch_dienthoai'],
				$_SESSION['ses_ch_email'],
				$_SESSION['ses_ch_cmnd'],
				$_SESSION['ses_ch_name'],
				$_SESSION['ses_ch_pttt']
				);
		}else{
			$mahoadon = $gv_class_cart->Get_max_mhd();
			if($mahoadon != FALSE){	
				foreach($mahoadon as $item){
					$mahoadon = $item['mahoadon']+1;
					break;
				}
			}else{
				$mahoadon = 0;
			}	
			$uid = NULL;
			$tinhtrang = 'order';
			$ngaygiao = NULL;
			$real_cart = $_SESSION['ses_cart'];
			foreach($real_cart as $item){
				$gv_class_cart->Order_for_guest(
				$mahoadon, $uid, $item['mid'], $item['soluong'], $tinhtrang, $ngaygiao,
				$_SESSION['ses_ch_diachi'],
				$_SESSION['ses_ch_dienthoai'],
				$_SESSION['ses_ch_email'],
				$_SESSION['ses_ch_cmnd'],
				$_SESSION['ses_ch_name'],
				$_SESSION['ses_ch_pttt']
				);
			}
			session_unset('ses_qt_in_cart');
			session_unset('ses_cart');					
		}
		require "views/cart/views_result_order.php";
	// Kết thúc xử lý khi NgânLượng.vn trả về
	}else{
		if(
			isset($_POST['input_text_email']) &&		
			isset($_POST['input_text_firstname']) &&
			isset($_POST['input_text_idnum']) &&
			isset($_POST['rdo_pttt']) &&
			isset($_POST['input_text_address']) &&
			isset($_POST['input_text_phonenumber'])
			){
				$_SESSION['ses_ch_diachi'] = $_POST['input_text_address'];
				$_SESSION['ses_ch_dienthoai'] = $_POST['input_text_phonenumber'];
				$_SESSION['ses_ch_email'] = $_POST['input_text_email'];
				$_SESSION['ses_ch_cmnd'] = $_POST['input_text_idnum'];
				$_SESSION['ses_ch_name'] = $_POST['input_text_firstname'];
				$_SESSION['ses_ch_pttt'] = $_POST['rdo_pttt'];
				
				if($_SESSION['ses_ch_pttt'] == 'card'){
					if(isset($_SESSION['ses_id'])){
						//Lấy mid của uid hiện tại với tinhtrang = "order"
						$mahoadon = $gv_class_cart->Master_get_mahoadon($_SESSION['ses_id']);
						$mahoadon = $mahoadon['mahoadon'];					
					}else{
						$mahoadon = $gv_class_cart->Get_max_mhd();
						if($mahoadon != FALSE){	
							foreach($mahoadon as $item){
								$mahoadon = $item['mahoadon']+1;
								break;
							}
						}else{
							$mahoadon = 0;
						}
					}
					$total_price = $_SESSION['ses_total_price'];	
					/*echo "
						<script type='text/javascript'>window.location='https://www.nganluong.vn/button_payment.php?receiver=gds.gradeus@gmail.com&product_name=$mahoadon&price=$total_price&return_url=http://gradeus.comyr.com/&comments=Congratulation';
						</script>";*/	
							
					echo 
						"
						<script type='text/javascript'>window.location='https://www.nganluong.vn/button_payment.php?receiver=gds.gradeus@gmail.com&product_name=$mahoadon&price=2000&return_url=http://gradeus.comyr.com?controller=nganluong';
						</script>";	
				}else{
					if(isset($_SESSION['ses_id'])){
						$gv_class_cart->Order_for_user(
							$_SESSION['ses_id'], 
							$_SESSION['ses_ch_diachi'],
							$_SESSION['ses_ch_dienthoai'],
							$_SESSION['ses_ch_email'],
							$_SESSION['ses_ch_cmnd'],
							$_SESSION['ses_ch_name'],
							$_SESSION['ses_ch_pttt']
							);
					}else{	
						$mahoadon = $gv_class_cart->Get_max_mhd();
						if($mahoadon != FALSE){	
							foreach($mahoadon as $item){
								$mahoadon = $item['mahoadon']+1;
								break;
							}
						}else{
							$mahoadon = 0;
						}	
						$uid = NULL;
						$tinhtrang = 'order';
						$ngaygiao = NULL;
						$real_cart = $_SESSION['ses_cart'];
						foreach($real_cart as $item){
							$gv_class_cart->Order_for_guest(
							$mahoadon, $uid, $item['mid'], $item['soluong'], $tinhtrang, $ngaygiao,
							$_SESSION['ses_ch_diachi'],
							$_SESSION['ses_ch_dienthoai'],
							$_SESSION['ses_ch_email'],
							$_SESSION['ses_ch_cmnd'],
							$_SESSION['ses_ch_name'],
							$_SESSION['ses_ch_pttt']
							);
						}
						session_unset('ses_qt_in_cart');
						session_unset('ses_cart');					
					}
					require "views/cart/views_result_order.php";
				}
			}else{
				echo "
				<script type='text/javascript'>
					window.location='".$url."gdsstore.html';
				</script>";	
			}
	}
?>
<?php	
	
	if(isset($_SESSION['ses_id'])){
		if(isset($_GET['mid']) && isset($_POST['txt_atc_qt'])){
			$uid = $_SESSION['ses_id'];
			$mid = $_GET['mid'];
			$qt = $_POST['txt_atc_qt'];
							
			$gv_class_cart = new CART;
			$get_max_mhd = $gv_class_cart->Get_max_mhd();
			$flag_max = $mhd_max = $flag = 0;
			
			$gv_class_cart->set_Uid($uid);
			$cart = $gv_class_cart->List_cart();
			
			// Lấy mã hóa đơn lớn nhất
			if($get_max_mhd != FALSE){
				foreach($get_max_mhd as $item){
					if($flag_max == 0){
						$mhd_max =  $item['mahoadon'];
						$flag_max = 1;
					}else{
						break;	
					}				
				}
				
				// Kiểm tra trùng lặp sản phẩm đã cho vào gio hàng
				foreach($get_max_mhd as $item){
					if($item['uid'] == $uid && $item['mid'] == $mid && $item['tinhtrang'] == 'cart'){
						$qt = $item['soluong'] + $qt;
						$flag_mhd = $item['mahoadon'];
						$flag = 1;// Cờ hiệu đã có sản phẩm này trong giỏ hàng, chỉ cần update số lượng.
					}
				}				
			}else{
				$mhd_max = 0;		
			}
						
						
			if($flag != 0){ // Có sẵn trong giỏ chỉ cần update số lượng	
				$gv_class_cart->Updatetocart($flag_mhd, $mid, $uid, $qt);
			}else{	
				$flag_exist = 0;
				if($get_max_mhd != FALSE){
					foreach($get_max_mhd as $item){
						if($item['uid'] == $uid && $item['tinhtrang'] == 'cart'){
							$gv_class_cart->Addtocart($item['mahoadon'] , $mid, $uid, $qt);
							$flag_exist = 1;
							break;
							
						}
					}
					if($flag_exist == 0){
						$gv_class_cart->Addtocart($mhd_max+1 , $mid, $uid, $qt);
					}
				}else{
					$gv_class_cart->Addtocart($mhd_max+1 , $mid, $uid, $qt);
				}
			}		
			require "views/cart/views_result_atc.php";
		}
			
	}else{
		//Khởi tạo SESSION
		if(!isset($_SESSION['ses_cart'])){
			$temp[] = array("mid"=>"mid@init", "soluong"=>"qt@init");
			$_SESSION['ses_cart'] =  $temp;
		}
		if(isset($_GET['mid']) && isset($_POST['txt_atc_qt'])){
			$mid = $_GET['mid'];
			$qt = $_POST['txt_atc_qt'];				
			$cart_temp = $_SESSION['ses_cart'];
			
			$recycle_cart[] = array("mid"=>"mid@init", "soluong"=>"qt@init");
			//Đổ mảng trong SESSION ra một mảng mới, nếu trùng mid thì ko add mà tăng số lượng, sản phẩm trùng sẽ dc add sau cùng
			
			foreach($cart_temp as $item){
				
				if($item['mid'] == "mid@init"){// Loại phần tử khởi tạo trong SESSION
						$recycle_cart[] = array("mid"=>"$item[mid]", "soluong"=>"$item[soluong]");
				}else{
					if($item['mid'] == $mid){				
						$qt = $qt + $item['soluong']; //Tăng số lượng
					}else{
						$real_cart[] = array("mid"=>"$item[mid]", "soluong"=>"$item[soluong]");	// Add sản phẩm ko trùng trong mảng	
					}
				}
			}			
			$real_cart[] = array("mid"=>"$mid", "soluong"=>"$qt");	// Cập nhật sản phẩm mới
			
		
			// Đếm tổng số sản phẩm trong giỏ
			$count = 0;
			foreach($real_cart as $item){
				$count = $count + $item['soluong'];
			}
			
			$_SESSION['ses_qt_in_cart'] = $count;
			$_SESSION['ses_cart'] = $real_cart;
			require "views/cart/views_result_atc.php";
		}		
	}
?>
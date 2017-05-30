<?php
	$gv_class_mathang = new MATHANG;
	$gv_class_cart = new CART;
	$note = "";
	$show_cart = NULL;
	if(isset($_SESSION['ses_id'])){ //Trường hợp người mua là thành viên
		$gv_class_cart->set_Uid($_SESSION['ses_id']);	
		$data = $gv_class_cart->List_cart(); // theo uid
		if($data == FALSE){
			$note = "empty_cart";
		}else{
			$note = "something";
			foreach($data as $item){
				if($item['tinhtrang'] == 'cart'){
					$gv_class_mathang->set_Mid($item['mid']);
					$info = $gv_class_mathang->Info();
					
					foreach($info as $mh){
						$image = $mh['hinhanh'];	
						$tenmh = $mh['tenmh'];
						$dongia = $mh['dongia'];
					}
					$show_cart[] = array("mid"=>"$item[mid]", "tenmh"=>"$tenmh", "dongia"=>"$dongia", "soluong"=>"$item[soluong]", "hinhanh"=>"$image"); 	
				}
			}
		}			
		
	}else{ // Trường hợp người mua là khách
		if($_SESSION['ses_cart'] == NULL){
			$note = "guest_no_ses_cart";				
		}else{		
			$note = "guest_has_cart";
			$data_note = $_SESSION['ses_cart'];
			
			foreach($data_note as $item){					
				$gv_class_mathang->set_Mid($item['mid']);
				$info = $gv_class_mathang->Info();
				
				foreach($info as $mh){
					$image = $mh['hinhanh'];	
					$tenmh = $mh['tenmh'];
					$dongia = $mh['dongia'];
				}
				$show_cart[] = array("mid"=>"$item[mid]", "tenmh"=>"$tenmh", "dongia"=>"$dongia", "soluong"=>"$item[soluong]", "hinhanh"=>"$image"); 
			}
		}
	}
	require "views/user/views_check_out.php";

?>
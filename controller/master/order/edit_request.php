<?php
	$gv_class_cart = new CART;
	$gv_class_mathang = new MATHANG;
	$mahoadon = $_GET['ddh']; 
	$data = $gv_class_cart->Master_list_mhd_order($mahoadon);
	
	if($data != FALSE){
		foreach($data as $item){
			$uid = $item['uid'];
			$tennguoimua = $item['tennguoimua'];
			$cnmd = $item['cmnd'];
			$email = $item['email'];
			$dienthoai = $item['dienthoai'];
			$diachi = $item['diachi'];
			$product[] = array("mid" => $item['mid'], "soluong" => $item['soluong']);
		}
		$info = FALSE;
		foreach($product as $item){
			$gv_class_mathang->set_Mid($item['mid']);
			$info_item = $gv_class_mathang->Info();		
			foreach($info_item as $ii){
				$info[] = array("mid" => $item['mid'], "soluong" => $item['soluong'], "tenmh" => $ii['tenmh'], "hinhanh" => $ii['hinhanh'], "dongia" => $ii['dongia']);
			}
			
		}
	}
	
	require "views/master/order/views_edit_order_form.php";
?>
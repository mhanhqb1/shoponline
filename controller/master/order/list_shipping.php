<?php
	$gv_class_cart = new CART;
	$hoadon = $gv_class_cart->Master_list_mhd_shipping();
	$show_order = FALSE;
	if($hoadon != FALSE){
		$result = "Detected";
		foreach($hoadon as $item){
			$product = $gv_class_cart->Master_list_mhd_order($item['mahoadon']);
			$show_order[] = array("mahoadon" => $item['mahoadon'], "tennguoimua" => $item['tennguoimua'], "email" => $item['email'], "dienthoai" => $item['dienthoai'], "sanpham" => $product, "diachi" => $item['diachi']);
				
		}	
	}
	
	require "views/master/order/views_list_shipping.php";
?>
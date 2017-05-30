<?php
	$gv_class_cart = new CART;
	$hoadon = $gv_class_cart->Master_list_mhd_complete();
	$show_order = FALSE;
	if($hoadon != FALSE){
		$result = "Detected";
		foreach($hoadon as $item){
			$product = $gv_class_cart->Master_list_mhd_order($item['mahoadon']);
			$show_order[] = array("mahoadon" => $item['mahoadon'], "tennguoimua" => $item['tennguoimua'], "email" => $item['email'], "dienthoai" => $item['dienthoai'], "diachi" => $item['diachi'], "ngaygiao" => $item['ngaygiao'], "sanpham" => $product, "diachi" => $item['diachi']);
				
		}	
	}
	/*
	echo "<pre>";
	print_r($show_order);
	echo "</pre>";
	*/
	
	require "views/master/order/views_list_complete.php";
?>
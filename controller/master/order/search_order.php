<?php
	$gv_class_order = new CART;
	$type = $_POST['rdo_search'];
	$content = $_POST['txt_search_content'];
	//Tìm mã hóa đơn tương ứng với điều kiện SEARCH
	$data = $gv_class_cart->Master_search_order($type, $content);
	
		
	$show_order = FALSE;
	if($data != FALSE){
		//Duyệt danh sách tìm được
		foreach($data as $mhd){	
			foreach($data as $item){
				$product = $gv_class_cart->Master_list_mhd_order($item['mahoadon']);
				$show_order[] = array("mahoadon" => $item['mahoadon'], "tennguoimua" => $item['tennguoimua'], "email" => $item['email'], "dienthoai" => $item['dienthoai'], "diachi" => $item['diachi'], "sanpham" => $product);
			}	
			break;
		}
	}	
	/*echo "<pre>";
	print_r($show_order);
	echo "</pre>";
	*/
	require "views/master/order/views_result_search_order.php";
?>
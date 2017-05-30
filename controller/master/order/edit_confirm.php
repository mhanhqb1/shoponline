<?php
	$gv_class_cart = new CART;
	if(
		isset($_POST['txt_mhd']) &&
		isset($_POST['input_text_email']) &&		
		isset($_POST['input_text_firstname']) &&
		isset($_POST['input_text_idnum']) &&
		isset($_POST['input_text_address']) &&
		isset($_POST['input_text_phonenumber'])
	){
		$gv_class_cart->set_Mahoadon($_POST['txt_mhd']);
		$gv_class_cart->set_Email($_POST['input_text_email']);		
		$gv_class_cart->set_Tennguoimua($_POST['input_text_firstname']);
		$gv_class_cart->set_Cmnd($_POST['input_text_idnum']);
		$gv_class_cart->set_Diachi($_POST['input_text_address']);
		$gv_class_cart->set_Dienthoai($_POST['input_text_phonenumber']);
		
		$gv_class_cart->Master_edit_info_in_order();
		
		require "views/master/order/views_result_edit_confirm_product.php";
		
	}
	
?>
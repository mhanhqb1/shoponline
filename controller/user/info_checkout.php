<?php
	if(isset($_SESSION['ses_username'])){
		$gv_class_user = new USER;
		$data = $gv_class_user->Get_user_info($_SESSION['ses_username']);	
		$hoten = $data['ho']." ".$data['ten'];
		$email = $data['email'];
		$cmnd = $data['cmnd'];
		$diachi = $data['diachi'];
		$dienthoai = $data['dienthoai'];
	}else{
		$hoten = "";
		$email = "";
		$cmnd = "";
		$diachi = "";
		$dienthoai = "";
	}
	require "views/user/views_info_checkout_form.php";
?>
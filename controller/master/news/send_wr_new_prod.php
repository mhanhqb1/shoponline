<?php
	$_SESSION['ses_title'] = $_POST['txt_title'];
	if($_POST['txta'] == NULL){
		$_SESSION['ses_err'] = 'err';
		require "views/master/news/views_new_prod_form.php";
	}
	
	if(isset($_POST['btn_view']) && $_POST['txta'] != NULL){
		$letdo = "review";
		require "views/master/news/views_new_prod_form.php";
	}
	
	if(isset($_POST['btn_comfirm']) && $_POST['txta'] != NULL && !isset($_POST['btn_view'])){
		unset($_SESSION['ses_title']);
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$today = date("H:i:s d/m/Y");
		$gv_class_news = new NEWS;
		$gv_class_news->Add_new_prod($_POST['txt_title'], $_POST['txta'], $today);
		require "views/master/news/views_result_send_new_prod_form.php";
	}
?>
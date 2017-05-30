<?php
	$_SESSION['ses_title'] = $_POST['txt_title'];
	if($_POST['txta'] == NULL){
		echo "
			<script type='text/javascript'>
				window.location='".$_SERVER['PHP_SELF']."?controller=master&action=news&function=wr_new_sale&err=empty_content';
			</script>";	
	}
	
	if(isset($_POST['btn_view'])){
		$letdo = "review";
		require "views/master/news/views_new_sale_form.php";
	}
	
	if(isset($_POST['btn_comfirm']) && $_POST['txta'] != NULL){
		unset($_SESSION['ses_title']);
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$today = date("H:i:s d/m/Y");
		$gv_class_news = new NEWS;
		$gv_class_news->Add_new_sale($_POST['txt_title'], $_POST['txta'], $today);
		require "views/master/news/views_result_send_new_sale_form.php";
	}
?>
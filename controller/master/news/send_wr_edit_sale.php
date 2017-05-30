<?php
	$id = $_GET['id'];
	$_SESSION['ses_title'] = $_POST['txt_title'];
	if($_POST['txta'] == NULL){
		echo "
			<script type='text/javascript'>
				window.location='".$_SERVER['PHP_SELF']."?controller=master&action=news&function=edit&id=$id&err=empty_content';
			</script>";	
	}
	
	if(isset($_POST['btn_view'])){
		$letdo = "review";
		require "views/master/news/views_new_sale_edit_form.php";
	}
	
	if(isset($_POST['btn_comfirm']) && $_POST['txta'] != NULL){
		unset($_SESSION['ses_title']);
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$today = date("H:i:s d/m/Y");
		$gv_class_news = new NEWS;
		$gv_class_news->Edit_new_sale($id, $_POST['txt_title'], $_POST['txta'], $today);
		require "views/master/news/views_result_edit_sale.php";
	}
?>
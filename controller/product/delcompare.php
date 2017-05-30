<?php
	$no = $_GET['no'];
	if($no == 1 && isset($_SESSION['ses_compare_2'])){
		$_SESSION['ses_compare_1'] = $_SESSION['ses_compare_2'];
		echo $_SESSION['ses_compare_1'];
	}
	
	if($no == 1 && !isset($_SESSION['ses_compare_2'])){
		unset($_SESSION['ses_compare_1']);
	}
	
	unset($_SESSION['ses_compare_2']);
	$data1 = FALSE;
	$info1 = FALSE;
	
	$gv_class_product = new MATHANG;
	if(isset($_SESSION['ses_compare_1'])){
		$gv_class_product->set_Mid($_SESSION['ses_compare_1']);
		$data = $gv_class_product->Details();
		$info = $gv_class_product->Info();
	}else{
		$data = FALSE;
		$info = FALSE;
	}
	require "views/product/views_compare.php";
	/*else{
		echo "
		<script type='text/javascript'>
			window.location='".$_SERVER['PHP_SELF']."?controller=product&action=list_product';
		</script>";
	}*/
?>
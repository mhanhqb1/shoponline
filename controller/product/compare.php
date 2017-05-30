<?php
	$mid = $_GET['mid'];
	$gv_class_product = new MATHANG;
	if(!isset($_SESSION['ses_compare_1'])){
		$_SESSION['ses_compare_1'] = $mid;
	}else{
		$_SESSION['ses_compare_2'] = $mid;
	}
	/*
	if(isset($_SESSION['ses_compare_2']) && !isset($_SESSION['ses_compare_1'])){
		$_SESSION['ses_compare_1'] = $_SESSION['ses_compare_2'];
		unset($_SESSION['ses_compare_2']);
	}
	*/
	/*
	echo "1: ".$_SESSION['ses_compare_1']."<br />";
	echo "2: ".$_SESSION['ses_compare_2'];*/
	
	if(isset($_SESSION['ses_compare_1'])){
		$gv_class_product->set_Mid($_SESSION['ses_compare_1']);
		$data = $gv_class_product->Details();
		$info = $gv_class_product->Info();
	}
	
	if(isset($_SESSION['ses_compare_2'])){
		$gv_class_product->set_Mid($_SESSION['ses_compare_2']);
		$data1 = $gv_class_product->Details();
		$info1 = $gv_class_product->Info();
	}
	
	/*echo "<pre>";
	print_r($data1);
	echo "</pre>";*/
	
	require "views/product/views_compare.php";
?>
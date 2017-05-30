<?php
	
	$filesmallname =  $_FILES["filesmall"]["name"];	
	if($filesmallname != NULL){
		$filesmallname =  $_FILES["filesmall"]["name"];
		$filesmalltype =  $_FILES["filesmall"]["type"];
		$filesmalltmp =   $_FILES["filesmall"]["tmp_name"];
		$filesmallsize =  $_FILES["filesmall"]["size"];		
		$filesmalltype = explode("/", $filesmalltype);	
		$imagesmall = "library/images/phones/".$_POST['txt_mid'].".".$filesmalltype[1];
	}else{
		$imagesmall = $_POST['txt_imagesmall'];	
	}
	
	$filename =  $_FILES["file"]["name"];	
	if($filename != NULL){
		$filename =  $_FILES["file"]["name"];
		$filetype =  $_FILES["file"]["type"];
		$filetmp =   $_FILES["file"]["tmp_name"];
		$filesize =  $_FILES["file"]["size"];		
		$filetype = explode("/", $filetype);	
		$image = "library/images/phones/details/".$_POST['txt_mid'].".".$filetype[1];
	}else{
		$image = $_POST['txt_image'];
	}	
	
 	$mid = $_POST['txt_mid'];

	$gv_class_product = new MATHANG;
	
	$gv_class_product->Update(
		$_POST['txt_mid'],
		$_POST['txt_tenmh'],
		$_POST['txt_hangsx'],
		$_POST['txt_dongia'],
		$imagesmall,
		$_POST['txt_mang'], 
		$_POST['txt_mausac'],
		$_POST['txt_kttl'], 
		$_POST['txt_ngonngu'], 
		$_POST['txt_loaimanhinh'], 
		$_POST['txt_kichthuochienthi'], 
		$_POST['txt_kieuchuong'], 
		$_POST['txt_tinnhan'],
		$_POST['txt_ketnoi'], 
		$_POST['txt_camera'], 
		$_POST['txt_danhba'], 
		$_POST['txt_bonhotrong'],
		$_POST['txt_thenho'], 
		$_POST['txt_tainhac'], 
		$_POST['txt_rung'],
		$_POST['txt_gprs'],
		$_POST['txt_hscsd'], 
		$_POST['txt_edge'],
		$_POST['txt_ggg'],
		$_POST['txt_wlan'],
		$_POST['txt_hedieuhanh'],
		$_POST['txt_dongho'],
		$_POST['txt_baothuc'],
		$_POST['txt_fm'],
		$_POST['txt_trochoi'],
		$_POST['txt_trinhduyet'],
		$_POST['txt_java'],
		$_POST['txt_quayphim'],
		$_POST['txt_ghiam'],
		$_POST['txt_nghenhac'],
		$_POST['txt_xemphim'],
		$_POST['txt_ghiamcuocgoi'],
		$_POST['txt_loangoai'],
		$_POST['txt_loaipin'], 
		$_POST['txt_tgcho'],
		$_POST['txt_tgdamthoai'],
		$_POST['txtr_mota'],
		$image,
		$_POST['txt_video']);	
		
	if($filesmallname != NULL){
		$gv_class_upload = new UPLOAD($filesmallname, $filesmalltype[1], $filesmalltmp, $filesmallsize);
		$gv_class_upload->Do_upload_small($_POST['txt_mid']);
	}
	if($filename != NULL){	
		$gv_class_upload = new UPLOAD($filename, $filetype[1], $filetmp, $filesize);
		$gv_class_upload->Do_upload_details($_POST['txt_mid']);
	}
	
	require "views/master/product/views_result_edit.php";
?>
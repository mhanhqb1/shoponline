<?php
	$mid = $_POST['txt_mid'];
	$qt = $_POST['txt_qt'];
	
	$gv_class_warehouse = new WAREHOUSE;
	$gv_class_warehouse->set_Mid($mid);
	$data = $gv_class_warehouse->Check_warehouse();
	
	if($data == FALSE){
		$gv_class_warehouse->Add_new($mid, $qt);	
		$check = 'ok';
	}else{
		$check = 'duplicate';
	}	
	
	require "views/master/warehouse/views_result_add_new.php";
?>
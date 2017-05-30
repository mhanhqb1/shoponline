<?php
	$gv_class_warehouse = new WAREHOUSE;
	$mid = $_POST['txt_mid'];
	$gv_class_warehouse->set_Mid($mid);
	$soluongcon = $_POST['txt_qt'];
	$gv_class_warehouse->set_Soluongcon($soluongcon);
	$gv_class_warehouse->Update();
	
	require "views/master/warehouse/views_result_edit.php";
?>
<?php
	$gv_class_warehouse = new WAREHOUSE;
	$mid = $_GET['mid'];
	$gv_class_warehouse->set_Mid($mid);
	$gv_class_warehouse->Del();
	
	require "views/master/warehouse/views_result_del.php";
?>
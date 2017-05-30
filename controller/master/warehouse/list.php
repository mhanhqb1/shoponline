<?php
	$gv_class_warehouse = new WAREHOUSE;
	$data = $gv_class_warehouse->List_warehouse();
	require "views/master/warehouse/views_list_warehouse.php";
?>
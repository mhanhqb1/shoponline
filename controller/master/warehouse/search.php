<?php
	$gv_class_warehouse = new WAREHOUSE;
	$content = $_POST['txt_search_content'];
	$gv_class_warehouse->set_Mid($content);
	$data = $gv_class_warehouse->Check_warehouse();
	/*echo "<pre>";
	print_r($show_order);
	echo "</pre>";
	*/
	require "views/master/warehouse/views_result_search.php";
?>
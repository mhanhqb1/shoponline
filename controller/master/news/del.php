<?php
	$id = $_GET['id'];
	$gv_class_news = new NEWS;
	$data = $gv_class_news->Del_sale($id);
	require "views/master/news/views_result_del_sale.php";
?>
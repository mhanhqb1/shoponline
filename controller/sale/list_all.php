<?php
	$gv_class_news = new NEWS;
	
	$data = $gv_class_news->List_news_sale();
	
	require "views/sale/views_list_all.php";
?>
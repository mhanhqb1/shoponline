<?php
	$gv_class_news = new NEWS;
		
	$data = $gv_class_news->List_news_prod();
	
	require "views/new_prod/views_list_all.php";
?>
<?php
	$gv_class_news = new NEWS;
	$data = $gv_class_news->List_news_sale();
	require "views/master/news/views_news_sale.php";
?>
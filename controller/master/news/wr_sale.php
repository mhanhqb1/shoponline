<?php
	$gv_class_news = new NEWS;
	$data = $gv_class_news->List_new_sale();
	require "views/master/news/views_sale_form.php";
?>
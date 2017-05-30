<?php
	$gv_class_news = new NEWS;
	$content = $_POST['txt_search_content'];	
	$data = $gv_class_news->search($content);
	$flag_search = 1;
	require "views/master/news/views_result_search.php";
?>
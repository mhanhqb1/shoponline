<?php
	$gv_class_news = new NEWS;
	if(isset($_GET['id'])){
		$data = $gv_class_news->List_id_new_prod($_GET['id']);
		$comment = $gv_class_news->List_comment_prod($_GET['id']);
	}else{
		$data = $gv_class_news->List_new_prod();
	}
	
	$data_other = $gv_class_news->List_other_prod();
	
	require "views/new_prod/views_list.php";
?>
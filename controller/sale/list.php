<?php
	$gv_class_news = new NEWS;
	if(isset($_GET['id'])){
		$data = $gv_class_news->List_id_sale($_GET['id']);
		$comment = $gv_class_news->List_comment_sale($_GET['id']);
	}else{
		$data = $gv_class_news->List_new_sale();
	}
	
	$data_other = $gv_class_news->List_other_sale();
	
	require "views/sale/views_list.php";
?>
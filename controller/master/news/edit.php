<?php
	$id = $_GET['id'];
	$gv_class_news = new NEWS;
	$data = $gv_class_news->List_id_sale($id);
	require "views/master/news/views_new_sale_edit_form.php";
?>
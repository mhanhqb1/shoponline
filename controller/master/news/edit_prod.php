<?php
	$id = $_GET['id'];
	$gv_class_news = new NEWS;
	$data = $gv_class_news->List_id_new_prod($id);
	require "views/master/news/views_new_prod_edit_form.php";
?>
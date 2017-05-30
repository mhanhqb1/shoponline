<?php
	$gv_class_comment = new COMMENT;
	$id = $_GET['id'];
	$mid = $_GET['mid'];
	$gv_class_comment->Del($id);
	require "views/master/comment/views_result_del_comment.php";
?>
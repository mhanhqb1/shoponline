<?php
	$gv_class_research = new RESEARCH;
	$id= $_GET['id'];
	$data = $gv_class_research->Del($id);
	require "views/master/research/views_result_del.php";
?> 
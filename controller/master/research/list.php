<?php
	$gv_class_research = new RESEARCH;
	$data = $gv_class_research->List_all();
	require "views/master/research/views_list.php";
?> 
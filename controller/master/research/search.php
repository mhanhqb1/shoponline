<?php
	$gv_class_research = new RESEARCH;
	$content = $_POST['txt_search_content'];
	$data = $gv_class_research->Search($content);
	$search = 1;
	require "views/master/research/views_list.php";
?> 
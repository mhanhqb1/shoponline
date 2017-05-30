<?php
	$gv_class_research = new RESEARCH;
	$data = $gv_class_research->Show_id($_GET['id']);	
	
	require "views/master/research/views_edit_form.php";
?> 
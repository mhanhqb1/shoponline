<?php
	$gv_class_research = new RESEARCH;
	$id = $_POST['txt_id'];
	$quest = $_POST['txt_quest'];
	$hight = $_POST['txt_idea1'];
	$midium = $_POST['txt_idea2'];
	$low = $_POST['txt_idea3'];
	$status = $_POST['rdo_status'];
	
	if($status == 1){
		$gv_class_research->Deactivate();
	}
	
	$gv_class_research->Edit_research($id, $quest, $hight, $midium, $low, $status);
	
	require "views/master/research/views_result_edit.php";
?> 
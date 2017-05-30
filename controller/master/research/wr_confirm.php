<?php
	$gv_class_research = new RESEARCH;
	$quest = $_POST['txt_quest'];
	$hight = $_POST['txt_idea1'];
	$midium = $_POST['txt_idea2'];
	$low = $_POST['txt_idea3'];
	$status = $_POST['rdo_status'];
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$time = date("H:i:s d/m/Y");
	if($status == 1){
		$gv_class_research->Deactivate();
	}
	$gv_class_research->New_research($quest, $hight, $midium, $low, $status, $time);
	
	require "views/master/research/views_result_wr_confirm.php";
?> 
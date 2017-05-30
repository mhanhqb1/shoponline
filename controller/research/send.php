<?php
	$gv_class_research = new RESEARCH;
	if(isset($_POST['research']) && !isset($_SESSION['ses_research'])){
		$_SESSION['ses_research'] = $_POST['research'];
		$result = $_SESSION['ses_research'];
		$count = $gv_class_research->Get_count();
		$num = $count['count_'.$result] + 1;
		$gv_class_research->Send($result, $num);
		
	}
	
	$count = $gv_class_research->Get_count();
	$total = $count['count_hight'] + $count['count_midium'] + $count['count_low'];
	
	if($count['count_midium'] != 0){	
		$midium = ($count['count_midium']*100)/$total;
		$midium = round($midium,1);
	}else{
		$midium = 0;
	}
	if($count['count_low'] != 0){
		$low = ($count['count_low']*100)/$total;
		$low = round($low,1);
	}else{
		$low = 0;	
	}
	
	if($count['count_midium'] == 0 && $count['count_low'] == 0 && $count['count_hight'] == 0){
		$hight = 0;
	}else{
		$hight = 100 - ($midium+$low);
	}
	
	require "views/research/views_result_send_research.php";
	
	
?> 
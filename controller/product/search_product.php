<?php
	$type = $_GET['type'];
	$key = $_GET['key'];
	
	$key = str_replace('_',' ', $key);
	
	$gv_class_product = new MATHANG;
	
	if($type == "custom"){
		$data = $gv_class_product->Search_custom($key);
	}
	
	if($type == "default"){
		$data = $gv_class_product->Search_default($key);
	}
	
	if($type == "techspec"){
		if($key == 'Typeofscreen'){
			$mid_arr = $gv_class_product->Search_typeofscreen($key);
		}else{
			if($key == 'android' || $key == 'ios' || $key == 'windowsphone' || $key == 'blackberry'){
				$mid_arr = $gv_class_product->Search_os($key);
			}else{
				$mid_arr = $gv_class_product->Search_techspec($key);
			}
		}
		
		if($mid_arr == FALSE){
			$data = FALSE;	
		}else{
			foreach($mid_arr as $item){
				$gv_class_product->set_Mid($item['mid']);
				$info[] = $gv_class_product->Info_search();
			}
			$data = $info;
		}
	}	
	/*echo "<pre>";
	print_r($data);
	echo "</pre>";*/
	require "views/product/views_result_search_product.php";
?>
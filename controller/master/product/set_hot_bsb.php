<?php
	$gv_class_product = new MATHANG;
	$gv_class_product->Set_clear_hot();	
	if(isset($_POST['hot_prod']) && $_POST['hot_prod'] != null){			
		foreach($_POST['hot_prod'] as $value){		
			$gv_class_product->Set_hot($value);
		}
	}
	$gv_class_product->Set_clear_bestbuy();	
	if(isset($_POST['bsb_prod']) && $_POST['bsb_prod'] != null){			
		foreach($_POST['bsb_prod'] as $value){		
			$gv_class_product->Set_bestbuy($value);
		}
	}
	
	
	require "views/master/product/views_result_edit_hot_bsb.php";
?>
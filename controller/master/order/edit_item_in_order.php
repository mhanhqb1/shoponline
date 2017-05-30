<?php	
	$mahoadon = $_POST['txt_mhd'];
	$mid = $_POST['txt_mid'];
	$qt = $_POST['txt_qt'];
	$gv_class_cart = new CART;
	$gv_class_cart->Master_save_change($mahoadon, $mid, $qt);
	
	echo "
		<script type='text/javascript'>
			window.location='".$_SERVER['PHP_SELF']."?controller=master&action=order&function=edit&ddh=$mahoadon';
		</script>";
?>



	
<?php	
	if(isset($_SESSION['ses_id'])){
		$mid = $_POST['txt_mid'];
		$qt = $_POST['txt_soluong_mh'];
		$gv_class_cart = new CART;
		$gv_class_cart->Save_change($mid, $_SESSION['ses_id'], $qt, "cart");
	}else{		
		$cart_temp = $_SESSION['ses_cart'];
		$mid = $_POST['txt_mid'];
		$qt_item = $_POST['txt_soluong_mh'];
		$real_cart = NULL;
		$qt = 0;
		foreach($cart_temp as $item){
			if($item['mid'] == $mid){
				$real_cart[] = array("mid"=>"$item[mid]", "soluong"=>"$qt_item");
				$qt = $qt + $qt_item;
			}else{
				$real_cart[]= array("mid"=>"$item[mid]", "soluong"=>"$item[soluong]");
				$qt = $qt + $item['soluong'];
			}
		}
		$_SESSION['ses_cart'] = $real_cart;
		$_SESSION['ses_qt_in_cart'] = $qt;
	}
	echo "
		<script type='text/javascript'>
			window.location='".$url."gio-hang.html';
		</script>";	
?>
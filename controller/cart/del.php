<?php	
	$mid = $_GET['mid'];
	
	if(isset($_SESSION['ses_id'])){		
		$uid = $_SESSION['ses_id'];
		$gv_class_cart = new CART;
		$gv_class_cart->set_Mid($mid);
		$gv_class_cart->set_Uid($uid);		
		$gv_class_cart->Delete_mid();
		
	}else{
		$cart_temp = $_SESSION['ses_cart'];		
		$recycle_cart = NULL;
		$real_cart = NULL;
		$qt = 0;
		foreach($cart_temp as $item){
			if($item['mid'] == $mid){
				$recycle_cart[] = array("mid"=>"$item[mid]", "soluong"=>"$item[soluong]");
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




	if(isset($_SESSION['ses_id'])){		
		if($_SESSION['ses_level'] == "MASTER"){
			$uid = $_GET['uid'];
			$ddh = $_GET['ddh'];
			$gv_class_cart = new CART;
			$gv_class_cart->set_Mid($mid);
			$gv_class_cart->set_Uid($uid);		
			$gv_class_cart->Delete_mid_order();
			echo "
				<script type='text/javascript'>
					window.location='".$_SERVER['PHP_SELF']."?controller=master&action=order&function=edit&ddh=$ddh';
				</script>";
		}
	}
?>
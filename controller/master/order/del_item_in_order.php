<?php	
	if(isset($_SESSION['ses_id'])){		
		if($_SESSION['ses_level'] == "MASTER"){
			$ddh = $_GET['ddh'];
			$mid = $_GET['mid'];
			$gv_class_cart = new CART;
			$gv_class_cart->set_Mid($mid);	
			$gv_class_cart->Delete_mid_order();
			echo "
				<script type='text/javascript'>
					window.location='".$_SERVER['PHP_SELF']."?controller=master&action=order&function=edit&ddh=$ddh';
				</script>";
		}
	}
?>



	
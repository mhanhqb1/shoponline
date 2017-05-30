<?php	
	if(isset($_GET['mid'])){
		$mid = $_GET['mid'];
		$gv_class_product = new MATHANG;
		$gv_class_product->set_Mid($mid);
		$data = $gv_class_product->Details();
		$info = $gv_class_product->Info();
		
		$gv_class_warehouse = new WAREHOUSE;
		$gv_class_warehouse->set_Mid($mid);
		$warehouse = $gv_class_warehouse->Check_warehouse();
		require "views/cart/views_add_to_cart.php";	
	}else{
		echo "
		<script type='text/javascript'>
			window.location='".$url."gio-hang.html';
		</script>";
	}
		
?>
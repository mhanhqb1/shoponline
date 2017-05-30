<?php
	if(isset($_GET['mid'])){
		$mid = $_GET['mid'];
		$gv_class_product = new MATHANG;
		$gv_class_product->set_Mid($mid);
		$data = $gv_class_product->Details();
		$info = $gv_class_product->Info();
		
		$gv_class_cm = new COMMENT;
		$gv_class_cm->set_Mid($mid);
		$comment = $gv_class_cm->List_comment();
		
		require "views/product/views_details_product.php";
	}else{
		echo "
		<script type='text/javascript'>
			window.location='".$url."gio-hang.html';
		</script>";
	}
?>
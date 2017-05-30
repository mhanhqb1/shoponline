<?php
	$id = $_GET['id'];
	$gv_class_news = new NEWS;
	$gv_class_news->Del_comment_prod($id);
	echo "
		<script type='text/javascript'>
			history.back(-1);
		</script>";
?>
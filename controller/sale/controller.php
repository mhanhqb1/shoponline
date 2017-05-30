<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "list":
			require "controller/sale/list.php";
			break;
			
			case "list_all":
			require "controller/sale/list_all.php";
			break;
			
			case "send_comment_sale":
			require "controller/sale/send_comment_sale.php";
			break;
		}
	}
?>
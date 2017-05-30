<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "list":
			require "controller/new_prod/list.php";
			break;
			
			case "list_all":
			require "controller/new_prod/list_all.php";
			break;
			
			case "send_comment_prod":
			require "controller/new_prod/send_comment_prod.php";
			break;
		}
	}
?>
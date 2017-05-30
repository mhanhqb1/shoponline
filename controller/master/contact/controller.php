<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "list":
			require "controller/master/contact/list.php";
			break;
			
			case "del":
			require "controller/master/contact/del.php";
			break;
			
			case "search":
			require "controller/master/contact/search.php";
			break;
		}
	}
?>
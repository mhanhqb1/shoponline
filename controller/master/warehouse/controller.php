<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "list":
			require "controller/master/warehouse/list.php";
			break;
			
			case "new":
			require "controller/master/warehouse/new.php";
			break;
			
			case "add_new":
			require "controller/master/warehouse/add_new.php";
			break;
			
			case "del":
			require "controller/master/warehouse/del.php";
			break;
			
			case "edit":
			require "controller/master/warehouse/edit.php";
			break;
			
			case "search":
			require "controller/master/warehouse/search.php";
			break;
			
		}
	}
?>
<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "new":
			require "controller/master/product/new.php";
			break;
			
			case "list":
			require "controller/master/product/list.php";
			break;
			
			case "edit":
			require "controller/master/product/edit.php";
			break;
			
			case "edit_comfirm":
			require "controller/master/product/edit_confirm.php";
			break;
			
			case "del":
			require "controller/master/product/del.php";
			break;
			
			case "search":
			require "controller/master/product/search.php";
			break;
						
			case "add_new":
			require "controller/master/product/add_new.php";
			break;
			
			case "list_hot":
			require "controller/master/product/list_hot.php";
			break;
			
			case "set_hot_bsb":
			require "controller/master/product/set_hot_bsb.php";
			break;
		}
	}
?>
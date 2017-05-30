<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "list_user":
			require "controller/master/user/list_user.php";
			break;
			
			case "del":
			require "controller/master/user/del.php";
			break;
			
			case "del_all":
			require "controller/master/user/del_all.php";
			break;
			
			case "edit":
			require "controller/master/user/edit_request.php";
			break;
			
			case "edit_confirm":
			require "controller/master/user/edit_confirm.php";
			break;
			
			case "search":
			require "controller/master/user/search.php";
			break;
			
		}
	}
?>
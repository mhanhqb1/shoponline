<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "wr":
			require "controller/master/research/wr.php";
			break;
			
			case "wr_confirm":
			require "controller/master/research/wr_confirm.php";
			break;
			
			case "list":
			require "controller/master/research/list.php";
			break;
			
			case "del":
			require "controller/master/research/del.php";
			break;
			
			case "edit":
			require "controller/master/research/edit.php";
			break;
			
			case "edit_confirm":
			require "controller/master/research/edit_confirm.php";
			break;
			
			case "search":
			require "controller/master/research/search.php";
			break;
		}
	}
?>
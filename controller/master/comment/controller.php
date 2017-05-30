<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "del":
			require "controller/master/comment/del.php";
			break;
		}
	}
?>
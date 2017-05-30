<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "send":
			require "controller/comment/send.php";
			break;
		
		}
	}
?>
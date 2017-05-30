<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "send":
			require "controller/research/send.php";
			break;
		}
	}
?>
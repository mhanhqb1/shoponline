<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "stop":
			require "controller/underconstruction/stop.php";
			break;
		}
	}
?>
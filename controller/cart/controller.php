<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "addtocart":
			require "controller/cart/addtocart.php";
			break;
			
			case "update_cart":
			require "controller/cart/update_cart.php";
			break;
			
			case "del":
			require "controller/cart/del.php";
			break;
			
			case "save":
			require "controller/cart/save.php";
			break;
			
			case "order":
			require "controller/cart/order.php";
			break;
		}
	}
?>
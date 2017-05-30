<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "list_product":
			require "controller/product/list_product.php";
			break;
			
			case "details":
			require "controller/product/details_product.php";
			break;

			case "search":
			require "controller/product/search_product.php";
			break;
			
			case "del":
			require "controller/product/del.php";
			break;
			
			case "rating":
			require "controller/product/max_rating.php";
			break;
			
			case "compare":
			require "controller/product/compare.php";
			break;
			
			case "delcompare":
			require "controller/product/delcompare.php";
			break;
		}
	}
?>
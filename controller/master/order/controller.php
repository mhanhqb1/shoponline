<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "list_order":
			require "controller/master/order/list_order.php";
			break;
			
			case "list_shipping":
			require "controller/master/order/list_shipping.php";
			break;
			
			case "list_complete":
			require "controller/master/order/list_complete.php";
			break;
			
			case "del"://xoa don dat hang dang order
			require "controller/master/order/del.php";
			break;
			
			case "del_shipping":
			require "controller/master/order/del_shipping.php";
			break;
			
			case "del_complete":
			require "controller/master/order/del_complete.php";
			break;
			
			case "setDate":
			require "controller/master/order/setdate.php";
			break;
			
			case "setShipping":
			require "controller/master/order/setShippping.php";
			break;		
			
			case "edit":
			require "controller/master/order/edit_request.php";
			break;
			
			case "del_item_in_order":
			require "controller/master/order/del_item_in_order.php";
			break;
			
			case "edit_item_in_order":
			require "controller/master/order/edit_item_in_order.php";
			break;
					
			case "edit_confirm":
			require "controller/master/order/edit_confirm.php";
			break;
			
			case "search_order":
			require "controller/master/order/search_order.php";
			break;
			
			case "search_shipping":
			require "controller/master/order/search_shipping.php";
			break;
			
			case "search_complete":
			require "controller/master/order/search_complete.php";
			break;
			
		}
	}
?>
<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "user":
			require "controller/master/user/controller.php";
			break;
			
			
			//--------------------------------------------------
			
			case "order":
			require "controller/master/order/controller.php";
			break;
			
			
			//--------------------------------------------------			
			
			case "warehouse":
			require "controller/master/warehouse/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "product":
			require "controller/master/product/controller.php";
			break;


			//--------------------------------------------------			
			
			case "comment":
			require "controller/master/comment/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "news":
			require "controller/master/news/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "research":
			require "controller/master/research/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "contact":
			require "controller/master/contact/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "comment_sale":
			require "controller/master/news/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "send_comment_sale":
			require "controller/sale/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "send_comment_prod":
			require "controller/sale/controller.php";
			break;
			

			//--------------------------------------------------			
			
			case "comment_prod":
			require "controller/master/news/controller.php";
			break;
			
		}
	}
?>
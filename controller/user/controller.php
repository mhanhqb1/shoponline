<?php
	if(isset($_GET['action'])){
		switch($_GET['action']){
			case "list":
			require "controller/user/list.php";
			break;
			
			case "contact":
			require "controller/user/contact.php";
			break;
			
			case "contact_send":
			require "controller/user/contact_send.php";
			break;
						
			case "check_login":
			require "controller/user/check_login.php";
			break;
			
			case "register":
			require "controller/user/register.php";
			break;
			
			case "check_register":
			require "controller/user/check_register.php";
			break;
			
			case "list_cart":
			require "controller/user/list_cart.php";
			break;
			
			case "personal":
			require "controller/user/personal.php";
			break;
			
			case "update_personal":
			require "controller/user/update_personal.php";
			break;
			
			case "password":
			require "controller/user/password.php";
			break;
			
			case "change_password":
			require "controller/user/change_password.php";
			break;
			
			case "forgot_password":
			require "controller/user/forgot_password.php";
			break;
			
			case "get_new_password":
			require "controller/user/get_new_password.php";
			break;
			
			case "log_out":
			require "controller/user/log_out.php";
			break;
			
			case "history":
			require "controller/user/history.php";
			break;
			
			case "check_out":
			require "controller/user/check_out.php";
			break;
			
			case "info_checkout":
			require "controller/user/info_checkout.php";
			break;
		}
	}
?>
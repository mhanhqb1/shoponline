<?php
	if(isset($_GET['function'])){
		switch($_GET['function']){
			case "wr_new_prod":
			require "controller/master/news/wr_new_prod.php";
			break;
			
			case "send_wr_new_prod":
			require "controller/master/news/send_wr_new_prod.php";
			break;
			
			case "send_wr_new_sale":
			require "controller/master/news/send_wr_new_sale.php";
			break;
			
			case "wr_new_sale":
			require "controller/master/news/wr_new_sale.php";
			break;
			
			case "wr_sale":
			require "controller/master/news/wr_sale.php";
			break;
			
			case "list_news_sale":
			require "controller/master/news/list_news_sale.php";
			break;
			
			case "list_news_prod":
			require "controller/master/news/list_news_prod.php";
			break;
			
			case "del":
			require "controller/master/news/del.php";
			break;
			
			case "del_prod":
			require "controller/master/news/del_prod.php";
			break;
			
			case "search":
			require "controller/master/news/search.php";
			break;
			
			case "edit":
			require "controller/master/news/edit.php";
			break;
			
			case "edit_prod":
			require "controller/master/news/edit_prod.php";
			break;
			
			case "send_wr_edit_sale":
			require "controller/master/news/send_wr_edit_sale.php";
			break;
			
			case "send_wr_edit_prod":
			require "controller/master/news/send_wr_edit_prod.php";
			break;
			
			case "search_prod":
			require "controller/master/news/search_prod.php";
			break;
			
			case "del_comment_sale":
			require "controller/master/news/del_comment_sale.php";
			break;
			
			case "del_comment_prod":
			require "controller/master/news/del_comment_prod.php";
			break;
		}
	}
?>
<?php
	
	session_start();
	require_once "library/convert_unicode.php";
	require_once "library/DB_Connection.php";
	require_once "templates/01/header.php";
	require_once "templates/01/content_left.php";
	require_once ('library/ckeditor/ckeditor.php') ; 
	require_once ('library/ckfinder/ckfinder.php') ;
	$_SESSION['ses_level'] = 'MASTER';
	echo "
		<script language='javascript'>
			$(document).ready(function(){	
				$('#content_center').hide();			
				//$('#content_center').fadeIn(700);
				//$('#content_center').slideToggle(1000);				
				$('#content_center').toggle(500);
			})
		</script>";
		
	echo "<div id='content_center'> ";
	if(isset($_GET['controller'])){
		switch($_GET['controller']){
			case "sale":
			require_once "controller/sale/controller.php";
			break;
			
			case "new_prod":
			require_once "controller/new_prod/controller.php";
			break;
			
			case "user":
			require_once"controller/user/controller.php";
			break;
			
			case "product":
			require_once"controller/product/controller.php";
			break;
			
			case "cart":
			require_once"controller/cart/controller.php";
			break;
			
			case "underconstruction":
			require_once"controller/underconstruction/controller.php";
			break;
			
			case "comment":
			require_once"controller/comment/controller.php";
			break;
			
			case "send_comment_sale":
			require_once"controller/sale/controller.php";
			break;
			
			case "send_comment_prod":
			require_once"controller/new_prod/controller.php";
			break;
			
			case "research":
			require_once"controller/research/controller.php";
			break;
			
			case "nganluong":
				echo "
					<script type='text/javascript'>
						window.location='".$url."mua-san-pham.html';
					</script>";
				
			break;
			
			case "master":
				if($_SESSION['ses_level'] == 'MASTER'){
					require_once"controller/master/controller.php";
				}else{
					echo "
						<script type='text/javascript'>
							window.location='".$url."gdsstore.html';
						</script>";
				}
				
			break;
		}
	}else{
		echo "
			<script type='text/javascript'>
				window.location='".$url."gdsstore.html';
			</script>";
	}
	echo "</div>";
	
	require_once"templates/01/content_right.php";
	echo "<div style='clear: right;'></div>";
	echo "<div style='clear: left;'></div>";
	echo "<br /><br /><br />";
	require_once"templates/01/footer.php";
?>
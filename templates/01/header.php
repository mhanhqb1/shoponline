<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" itemscope itemtype="http://schema.org/Product"><head>
	<?php
		$vt = strrpos($_SERVER['PHP_SELF'], "/");
		$url = substr($_SERVER['PHP_SELF'], 0, $vt)."/";
		echo "<base href='$url' />";
		//$url = 'http://gradeus.comyr.com/'; //Hosting!
	?>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <!-- Add the following three tags inside head -->
    <meta itemprop="name" content="GDS-Store">
    <meta itemprop="description" content="Dù cho bạn đã biết chính xác những gì
    bạn đang tìm kiếm hoặc bạn muốn duyệt
    hàng tá website để tình cờ tìm được một
    sản phẩm hoàn hảo, phù hợp với phong cách
    của riêng mình.
    
    Với chúng tôi, hội đủ tất cả những gì bạn cần. 
    Với bạn, chọn lựa không còn là điều khó khăn!
    
    
    GDS-Store">
    <meta itemprop="image" content="templates/01/images/green-shopping-bag-128x128.png">
    
    
	<title>GDS-Store</title>
    <link rel="shortcut icon" href="templates/01/images/green-shopping-bag-128x128.png" />
    
    <script type="text/javascript" src="templates/01/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="templates/01/js/jquery.dimensions.js"></script>
	<script src="templates/01/js/nav_bar_menu.js"></script>
    
    <script language="javascript">
		var namel = ".floatMenu";
		var menuYloc = null;
		
		$(document).ready(function(){
			menuYloc = parseInt($(namel).css("top").substring(0,$(namel).css("top").indexOf("px")))
			$(window).scroll(function () { 
				offset = menuYloc+$(document).scrollTop()+"px";
				$(namel).animate({top:offset},{duration:700,queue:false});
			});
		}); 
	</script>
    <script type="text/javascript" charset="utf-8" src="templates/01/js/jquery.raty.min.js"></script>
    <script type="text/javascript" src="templates/01/js/jquery-ui-1.8.16.custom.min.js"></script>
    <script src="templates/01/js/organictabs.jquery.js"></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            $("#example-two").organicTabs({
                "speed": 200
            });
    
        });
    </script>
    <script language="javascript">
		$(document).ready(function(){
			$(".menu_hangsx .search_list_mathang").click(function(){
				li = $(this).parent();
				if(li.hasClass("selected")){
					li.removeClass("selected");
				}else{
					li.addClass("selected").siblings().removeClass("selected");	
				}
				
			})
		})
		</script>
	</script>
    
    <script type="text/javascript">
	function chinhapso(e){
		var unicode=e.keyCode;
		//Chi nhap so
		if(unicode>=48 && unicode<=57){
			return true;
		}else{
			if(unicode == 13 || unicode == 8 || unicode == 9){
				return true;	
			}else{
				return false;
			}
		}
	}
	
	function chinhapchu(e){
		var unicode=e.keyCode;
		//Chi nhap so
		if(unicode>=65 && unicode<=90){
			return true;
		}else{
			if(unicode == 13 || unicode == 8){
				return true;	
			}else{
				return false;
			}
		}
	}
	</script>
    
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    
    <link type="text/css" href="templates/01/slideshow/nivo/default.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="templates/01/slideshow/nivo/nivo-slider.css" rel="stylesheet" media="screen" />    
    <link type="text/css" href="templates/01/style/floating_banner_2_side.css" rel="stylesheet" />    
    <link type="text/css" href="templates/01/style/header.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/footer.css" rel="stylesheet" />
	<link type="text/css" href="templates/01/style/nav_bar.css" rel="stylesheet" /> 
    <link type="text/css" href="templates/01/style/content.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/content_left.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/content_right.css" rel="stylesheet" />    
    <link type="text/css" href="templates/01/style/list_product.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/details_product.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/form.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/result_form.css" rel="stylesheet" />    
    <link type="text/css" href="templates/01/style/add_to_cart.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/check_out.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/history.css" rel="stylesheet" />
    <link type="text/css" href="templates/01/style/result_search.css" rel="stylesheet" />	
	<link type="text/css" href="templates/01/style/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
    <link type="text/css" href="templates/01/style/organictabs.css" rel="stylesheet" /> 
    <link type="text/css" href="templates/01/style/top_menu.css" rel="stylesheet" media="screen"/>  
    
</head>

<body>

    <div class="floatMenu" id='right'>
        <div style="text-align: center;">
        	<div class="blue_info">Chia sẻ</div>
    		<br />
            <!-- Đặt thẻ này ở nơi bạn muốn nút +1 hiển thị -->
            <g:plusone size="tall"></g:plusone>
            
            <!-- Đặt cuộc gọi hiển thị này ở nơi thích hợp -->
            <script type="text/javascript">
              window.___gcfg = {lang: 'vi'};
            
              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
            
            
            <br /><br />
            <div id="fb-root"></div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like" data-href="http://gradeus.comyr.com" data-send="false" data-layout="box_count" data-width="100" data-show-faces="true" data-font="arial"></div>
        </div>
    </div>

	<?php
		
		$urlpre = $_SERVER['QUERY_STRING'];
    	if($urlpre == "controller=product&action=list_product"){?>
			<div id="wrapper">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider" style="width:1019px; margin: 10px 0 0 1px;">
                        <img src="templates/01/slideshow/nivo/images/1.jpg" data-thumb="templates/01/slideshow/nivo/images/1.jpg" alt="" />
                        <a href="http://dev7studios.com"><img src="templates/01/slideshow/nivo/images/2.jpg" data-thumb="templates/01/slideshow/nivo/images/2.jpg" alt="" title="" /></a>
                        <img src="templates/01/slideshow/nivo/images/3.jpg" data-thumb="templates/01/slideshow/nivo/images/3.jpg" alt="" data-transition="slideInLeft" />
                        <img src="templates/01/slideshow/nivo/images/4.jpg" data-thumb="templates/01/slideshow/nivo/images/4.jpg" alt="" title="" />
                    
                        <img src="templates/01/slideshow/nivo/images/5.jpg" data-thumb="templates/01/slideshow/nivo/images/5.jpg" alt="" title="" />
                    
                        <img src="templates/01/slideshow/nivo/images/6.jpg" data-thumb="templates/01/slideshow/nivo/images/6.jpg" alt="" title="" />
                    
                        <img src="templates/01/slideshow/nivo/images/7.jpg" data-thumb="templates/01/slideshow/nivo/images/7.jpg" alt="" title="" />
                    
                        <img src="templates/01/slideshow/nivo/images/8.jpg" data-thumb="templates/01/slideshow/nivo/images/8.jpg" alt="" title="" />
                    
                </div>
            </div>
            
            
            <script type="text/javascript" src="templates/01/slideshow/nivo/jquery.nivo.slider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>
        <!--<div style="margin: -15px 0 0 0;"></div>-->
        
            <?php
		}else{?>
        	<div id = "logo"> 
                <div id="avatar"><img src="templates/01/images/green_logo.png" /></div> 
                <div id="slogan"> Với chúng tôi, hội đủ tất cả những gì bạn cần. <br> Với bạn, chọn lựa không còn là điều khó khăn! CEO. GDS-Store.</div>
                
            </div>
        <?php
		}
    ?>  
     
    
    <div class = "nav_bar" style="margin: 5px 0 10px 0;">
    	<div id="menu"> 
        	<ul class="menu">
            	
                <li><a href="<?php echo $url; ?>gdsstore.html"><span>GDS-Store</span></a></li>
                <li><a href="<?php echo $url; ?>san-pham-duoc-ua-thich-nhat.html"><span>Sản phẩm được yêu thích nhất</span></a></li>
                <li><a href="<?php echo $url; ?>tin-tuc-moi-nhat.html"><span>Tin tức mới nhất</span></a></li>
                <li><a href="<?php echo $url; ?>thong-tin-khuyen-mai.html"><span>Thông tin khuyến mãi</span></a></li>
                <li><a href="<?php echo $url; ?>dang-ky-thong-tin.html"><span>Đăng ký thông tin</span></a></li>
                <li><a href="<?php echo $url; ?>lien-he.html"><span>Liên hệ</span></a></li>
            	
			</ul>
    	</div> 
    </div> 
    <div id="copyright" style="display: none;"><a href="http://apycom.com/"></a></div> 

    
    
    <div class='line' style="margin: 0 0 22px 0;">
        <input class='dotted_line_ngang' type='submit' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' />    
        <input class='vuong_nho' type='submit' value='' />    
        <input class='vuong_lon' type='submit' value='' />    
        <input class='vuong_nho' type='submit' value='' />    
        <input class='dotted_line_ngang' type='submit' value='' style='background: url(templates/01/images/dotted_line_ngang.gif) center repeat-x;' />
    </div>
    
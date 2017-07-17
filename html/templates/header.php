
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js">
        </script><![endif]-->
        <title>Thời trang Elise</title>
        <link href='templates/css/kose.css?v=1' rel='stylesheet'/>
        <!--<link href='templates/css/mobile.css?v=1' rel='stylesheet'/>-->
        <!--<link href='templates/css/slidebars.css?v=1' rel='stylesheet'/>-->
        <link rel="stylesheet" href="templates/css/styles.css?v=1"/>
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="templates/js/slidebars.js"></script>
        <script src="templates/js/script.js"></script>
        <script src="templates/js/script2.js"></script>
    </head>
    <body>

        <!--MOBILE TOP-->
        <div id="TOP">
            <div class="top-i">
                <div id="top-img">
                    <a href="/"><img src="templates/images/logomobile.png"/></a>
                </div>
                <div id="m-menu">
                    <ul>
                        <li id="m-open" class="sb-open-left"><a href="javascript:void(0)"><p>MENU</p><img src="templates/images/icon_menu.png" /></a></li>
                        <li><a href="javascript:void(0)" class="m-search"><img src="templates/images/icon_search.png" /></a></li>
                        <li class="sb-open-right"><a href="javascript:void(0)" class="m-cart">
                                <img src="templates/images/icon_bag.png" />
                                <div id="m-cart-sl"><span>0</span></div>
                            </a></li>
                    </ul> 
                </div>
                <div class="clear" id="pre-clear"></div>
                <div id="m-search-i">
                    <form method="post" action="/index.php?ac=timkiem">
                        <input type="text" name="tukhoa" style="width:180px;border:none;outline:none;border-bottom:1px solid #000;padding:15px 10px 5px 10px;font-size:14px;color:#000;font-weight:600;display:inline-block;"/>
                        <input type="submit" name="timkiem" style="font-size:18px;color:#000;font-weight:600;background:#FFF;border:none;outline:none;cursor:pointer;display:inline-block;" value="SEARCH"/>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div id="sb-back"></div>

        <div class="sb-slidebar sb-left sb-style-overlay" style="margin-left: -256px;">
            <div class="sb-content" id="cssmenu2">
                <ul id="menu">
                    <li>
                        <a href="/index.php"><span>HOME</span></a>
                        <a href='index.php?ac=login' style='padding:0;float:right;'><span>SIGN IN</span></a>            </li>
                    <li>
                        <form method="post" action="index.php?ac=timkiem">
                            <input type="text" name="tukhoa" style="width:82%;outline:none;border:1px solid #000;padding:7px 5% 7px 3%;font-size:14px;color:#000;margin-left:10%;background:none;" placeholder="SEARCH"/>
                            <input type="image" name="timkiem" style="font-size:14px;color:#000;background:none;border:none;outline:none;cursor:pointer;float:left;margin:-29px 3px 0 0;float:right;height:26px;" src="templates/images/search_mobile.png" />
                        </form>
                        <div class="clear"></div>
                    </li>
                    <li><a href="index.php?ac=sanpham"><span>NEW IN</span></a></li>

                    <li class="has-sub" id="submenu-woman"><a href="#"><span>WOMAN</span></a>
                        <ul>
                            <li><a href='index.php?ac=sanpham&maloai=31'><span>BỘ SƯU TẬP MỚI</span></a></li>
                            <li><a href='index.php?ac=sanpham&maloai=32'><span>Áo</span></a></li>
                            <li><a href='index.php?ac=sanpham&maloai=33'><span>Áo khoác</span></a></li>
                            <li><a href='index.php?ac=sanpham&maloai=34'><span>Quần</span></a></li>
                            <li><a href='index.php?ac=sanpham&maloai=35'><span>Đầm liền/ Váy liền</span></a></li>
                            <li><a href='index.php?ac=sanpham&maloai=40'><span>Chân váy</span></a></li>
                            <li class='last'><a href='index.php?ac=sanpham&maloai=42'><span>Phụ kiện</span></a></li>
                        </ul>
                    </li>

                    <li class='has-sub' id='submenu-kids'><a href='#'><span>Kids</span></a>
                        <ul>
                            <li class='has-sub'><a href='#'><span>Kids Girl</span></a>
                                <ul>
                                    <li><a href='index.php?ac=sanpham&maloai=49'><span>Áo</span></a></li>
                                    <li><a href='index.php?ac=sanpham&maloai=50'><span>Áo khoác</span></a></li>
                                    <li><a href='index.php?ac=sanpham&maloai=51'><span>Quần</span></a></li>
                                    <li><a href='index.php?ac=sanpham&maloai=53'><span>Đầm liền/ Váy liền</span></a></li>
                                    <li><a href='index.php?ac=sanpham&maloai=52'><span>Chân váy</span></a></li>
                                    <li class='last'><a href='index.php?ac=sanpham&maloai=54'><span>Phụ kiện</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>Kids Boy</span></a>
                                <ul>
                                    <li><a href='index.php?ac=sanpham&maloai=58'><span>Áo</span></a></li>
                                    <li><a href='index.php?ac=sanpham&maloai=60'><span>Áo khoác</span></a></li>
                                    <li><a href='index.php?ac=sanpham&maloai=62'><span>Quần</span></a></li>
                                    <li class='last'><a href='#'><span>Phụ kiện</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class='has-sub'><a href='#'><span>Basic</span></a>
                        <ul>
                            <li><a href='index.php?ac=sanpham&maloai=66'><span>Áo</span></a></li>
                            <li><a href='#'><span>Áo khoác</span></a></li>
                            <li><a href='index.php?ac=sanpham&maloai=67'><span>Quần</span></a></li>
                            <li><a href='#'><span>Đầm liền/ Váy liền</span></a></li>
                            <li><a href='#'><span>Chân váy</span></a></li>
                            <li class='last'><a href='#'><span>Phụ kiện</span></a></li>
                        </ul>
                    </li>
                    <li><a href="/index.php?ac=news"><span>Tin tức</span></a></li>
                    <li><a href="/index.php?ac=sharevideo"><span>Videos</span></a></li>
                    <li><a href="/index.php?ac=about"><span>Hệ thống của hàng</span></a></li>
                    <li><a href="/index.php?ac=cs"><span>Dịch vụ khách hàng</span></a></li>
                    <li><a href="/index.php?ac=contact"><span>Liên hệ</span></a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
        </div>

        <div class="sb-slidebar sb-right sb-style-overlay">
            <div id="sb-top">
                <p>Giỏ hàng của bạn</p>
            </div>
            <p id='sb-none'>Chưa có sản phẩm nào trong giỏ hàng.</p>
        </div>
        
        <!-- END TOP -->

        <div id="framecontent">
            <div class="innertube" id="PC-TOP">

                <div style="text-align:center; margin-top:30px;">
                    <a href="/">
                        <img src="templates/images/logomobile.png" width="120px">
                    </a>
                </div>

                <div style="margin-top:20px;">
                    <div style="margin-left:50px;">
                        <div id='cssmenu'>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#' style="font-weight:bold;"><span>TRANG CHỦ</span></a>
                                    <ul>
                                        <li><a href='#'><span>Giới thiệu</span></a></li>
                                        <li><a href='#'><span>Triết lý sản phẩm</span></a></li>
                                    </ul>   
                                </li>
                                <li class='has-sub'>
                                    <a href='#' style="font-weight:bold;"><span>TIN TỨC</span></a>
                                    <ul>
                                        <li><a href='/index.php?ac=news'><span>Tin Elise</span></a></li>
                                        <li><a href='#'><span>Tin tổng hợp</span></a></li>   
                                    </ul>   
                                </li>
                                <li class='has-sub'>
                                    <a href='#' style="font-weight:bold;"><span>SHOP ONLINE</span></a>
                                    <ul>
                                        <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Woman</span></a>
                                            <ul>
                                                <li><a href='/index.php?ac=sanpham&maloai=31' style="font-weight:bold;"> <span>BỘ SƯU TẬP MỚI</span></a></li>
                                                <li><a href='/index.php?ac=sanpham&maloai=32'><span>Áo</span></a></li>
                                                <li><a href='/index.php?ac=sanpham&maloai=33'><span>Áo khoác</span></a></li>
                                                <li><a href='/index.php?ac=sanpham&maloai=34'><span>Quần</span></a></li>
                                                <li><a href='/index.php?ac=sanpham&maloai=35'><span>Đầm liền/ Váy liền</span></a></li>
                                                <li><a href='/index.php?ac=sanpham&maloai=40'><span>Chân váy</span></a></li>
                                                <li class='last'><a href='/index.php?ac=sanpham&maloai=44' style="font-weight:bold;" ><span>Phụ kiện</span></a></li>
                                            </ul>
                                        </li>
                                        <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Kids</span></a>
                                            <ul>
                                                <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Kids Girl</span></a>
                                                    <ul>
                                                        <li><a href='?ac=sanpham&maloai=49'><span>Áo</span></a></li>
                                                        <li><a href='?ac=sanpham&maloai=50'><span>Áo khoác</span></a></li>
                                                        <li><a href='?ac=sanpham&maloai=51'><span>Quần</span></a></li>
                                                        <li><a href='/index.php?ac=sanpham&maloai=53'><span>Đầm liền/ Váy liền</span></a></li>
                                                        <li><a href='/index.php?ac=sanpham&maloai=52'><span>Chân váy</span></a></li>
                                                        <li class='last'><a href='http://elise.vn/index.php?ac=sanpham&maloai=54'><span>Phụ kiện</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Kids Boy</span></a>
                                                    <ul>
                                                        <li><a href='/index.php?ac=sanpham&maloai=58'><span>Áo</span></a></li>
                                                        <li><a href='/index.php?ac=sanpham&maloai=60'><span>Áo khoác</span></a></li>
                                                        <li><a href='/index.php?ac=sanpham&maloai=62'><span>Quần</span></a></li>
                                                        <li class='last'><a href='#'><span>Phụ kiện</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Basic</span></a>
                                            <ul>
                                                <li><a href='/index.php?ac=sanpham&maloai=66'><span>Áo</span></a></li>
                                                <li><a href='#'><span>Áo khoác</span></a></li>
                                                <li><a href='/index.php?ac=sanpham&maloai=67'><span>Quần</span></a></li>
                                                <li><a href='#'><span>Đầm liền/ Váy liền</span></a></li>
                                                <li><a href='#'><span>Chân váy</span></a></li>
                                                <li class='last'><a href='#'><span>Phụ kiện</span></a></li>
                                            </ul>
                                        </li>	

                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#' style="font-weight:bold;"><span>BỘ SƯU TẬP</span></a>
                                    <ul>
                                        <li><a href='/index.php?ac=lookbook&catid=17'><span>Woman</span></a></li>
                                        <li><a href='/index.php?ac=lookbook&catid=18'><span>Kids</span></a></li>
                                        <li class='last'><a href='/index.php?ac=lookbook&catid=19'><span>Basic</span></a></li>
                                    </ul>
                                </li>
                                <li><a href='/index.php?ac=sharevideo' style="font-weight:bold;"><span>VIDEOS</span></a></li>
                                <li><a href='/index.php?ac=about' style="font-weight:bold;" ><span>HỆ THỐNG CỬA HÀNG</span></a></li>
                                <li><a href='/index.php?ac=cs' style="font-weight:bold;"><span>DỊCH VỤ KHÁCH HÀNG</span></a></li>
                                <li class='last'><a href='/index.php?ac=contact' style="font-weight:bold;"><span>LIÊN HỆ</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="clear:both;border-top:1px solid #ededed;width:170px;margin:27px auto 27px auto;"></div>
                <div style="margin-left:50px;">
                    <div style="font-size:12px;font-weight:600;letter-spacing:1px;">HOTLINE: 0168-699-8080</div>
                    <div style="margin-top:10px;">
                        <form method="post" action="http://elise.vn/index.php?ac=timkiem">
                            <input type="text" name="tukhoa" placeholder="Tìm kiếm..." style="width:163px; border:none; border:1px solid #797979 ;padding:5px 0 5px 5px;"/>
                        </form>
                    </div>
                    <div style="text-align:center; margin-top:10px;">
                        <div style="float:left;">
                            <a href="https://www.facebook.com/elisevietnam" target="_blank"><img src="templates/images/social-facebook.png" height="30" /></a>
                        </div>
                        <div style="float:left; margin-left:10px;">
                            <a href="https://www.youtube.com/channel/UCJQ_oyCa-XLriHtnotsAJnQ" target="_blank"><img src="templates/images/social-youtube.png" height="30" /></a>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div style="margin-top:10px;">
                        <audio id="player" src="http://elise.vn/Beethoven.mp3" autoplay="autoplay" preload="metadata"></audio>
                        <div style="float:left;">
                            <input type="hidden" id="chkplay" value="1" />
                            <a href="javascript:void(0)" onclick="stop();"><span id="play_id"></span></a>
                        </div>
                        <div id="playing" style="float:left; margin-left:10px; margin-top:5px;">
                            <img src="templates/images/playing.gif" />
                        </div>
                    </div>
                    <div style="clear:both"></div>

                    <div style="position: absolute; bottom: 5px; background:#FFFFFF; font-size:12px; width:100%; padding-left:0px;letter-spacing:1px;text-transform:uppercase;line-height:17px;border-top:1px solid #ededed;padding-top:27px;">
                        <strong>CÔNG TY CỔ PHẦN ELISE</strong><br>
                            <span style="font-size:10px;letter-spacing:0px;">
                                Tel: 043-946-0368<br>
                                Email: support@elise.vn<br>
                                Số 29 Thái Hà - Đống Đa - Hà Nội
                            </span>
                    </div>
                </div>
            </div>


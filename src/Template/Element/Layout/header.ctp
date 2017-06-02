<header id="header">
    <section id="userMenu">
        <ul id="userMenuLogin">
            <li style="margin-right:15px;">
                <a href='index.php?ac=login'>ĐĂNG NHẬP</a>                
            </li>
            <li class="giohang"><a href="index.php?ac=giohang">GIỎ HÀNG&nbsp;(0)</a></li>
        </ul>
        <br/><br/>
        <form id="changeViewOption" method="POST" action="">
            <input type="hidden" id="viewOption" name="viewOption" value="3">
            <ul id="list_filter">
                <li><a id="filter" href="#">Phân loại sản phẩm</a></li>
                <li style="margin-top:8px;">|</li>
                <li style="margin-top:5px;"><a class="view-three" title="Hiển thị 3 sản phẩm 1 hàng" href="#" onclick="changeViewOption('3')"></a></li>
                <li style="margin-top:5px;margin-right:0;"><a class="view-five" title="Hiển thị 5 sản phẩm 1 hàng" href="#" onclick="changeViewOption('5')"></a></li>
            </ul>
        </form>
    </section>
    <a href="index.php" id="a-logo"><img src="<?php echo $BASE_URL ?>/images/logomobile.png" alt="logo" id="logo"/></a>
    <!--End dangnhap_giohang-->
    <div id="box_filter">
        <form id="filter_form" method="GET" action="index.php">
            <div id="filter_form_content">
                <input type="hidden" name="ac" value="sanpham">
                <input type="hidden" name="maloai" value="32">
                <fieldset>
                    <h4>MÀU SẮC</h4>
                    <input id="color-1" type="radio" name="color" value="-1">
                    <label class='lbl-color' for="color-1" onclick="select('lbl-color', 'color-1', this)">
                        <span style="opacity:1;width:15px; height:15px;background:#none;" id="box_mausac"></span>
                    </label>
                </fieldset>
                <fieldset>
                    <h4>SIZE</h4>
                    <input id="size26" type="radio" name="size" value="S">
                    <label class='lbl-size' for="size26" onclick="select('lbl-size', 'size26', this)">S</label>
                    <input id="size27" type="radio" name="size" value="M">
                    <label class='lbl-size' for="size27" onclick="select('lbl-size', 'size27', this)">M</label>
                </fieldset>
                <fieldset>
                    <h4>GIÁ TIỀN</h4>
                    <input id="price1" type="radio" name="price" value="1">
                    <label class='lbl-price' for="price1" onclick="select('lbl-price', 'price1', this)">Dưới 500.000đ</label>
                    <input id="price2" type="radio" name="price" value="2">
                    <label class='lbl-price' for="price2" onclick="select('lbl-price', 'price2', this)">500.000đ - 1.000.000đ</label>
                </fieldset>
            </div>
            <div style="width: 100%">
                <input type="submit" class="button" value="OK"/>
                <input type="button" id="btnFilterReset" class="button" value="Bỏ chọn"/>
            </div>
        </form>
    </div>
</header>
<section id="navMenu">
    <div id="upArrow" class="arrow up"></div>
    <section id="box_nav">
        <nav>
            <ul>
                <li>
                    <a href='index.php'>TRANG CHỦ</a>
                </li>
                <li>
                    <a href='index.php?ac=news'>TIN TỨC</a>
                </li>
                <li>
                    <a href='index.php?ac=sanpham'>SHOP ONLINE</a>
                    <ul class='sub_menu'>
                        <li>
                            <a id='30' href='javascript:toggleSubmenu(30);'>ELISE WOMAN</a>
                            <ul class='sub_menu' style='display:none'>
                                <li>
                                    <a id='31' href='index.php?ac=sanpham&maloai=31'>BỘ SƯU TẬP MỚI</a>
                                </li>
                                <li>
                                    <a id='32' class='active' href='index.php?ac=sanpham&maloai=32'>Áo</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a id='46' href='javascript:toggleSubmenu(46);'>ELISE KIDS</a>
                            <ul class='sub_menu' style='display:none'>
                                <li>
                                    <a id='47' href='javascript:toggleSubmenu(47);'>GIRL</a>
                                    <ul class='sub_menu' style='display:none'>
                                        <li>
                                            <a id='48' href='index.php?ac=sanpham&maloai=48'>BỘ SƯU TẬP MỚI</a>
                                        </li>
                                        <li>
                                            <a id='49' href='index.php?ac=sanpham&maloai=49'>Áo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a id='56' href='javascript:toggleSubmenu(56);'>BOY</a>
                                    <ul class='sub_menu' style='display:none'>
                                        <li>
                                            <a id='57' href='index.php?ac=sanpham&maloai=57'>BỘ SƯU TẬP MỚI</a>
                                        </li>
                                        <li>
                                            <a id='63' href='javascript:toggleSubmenu(63);'>Phụ Kiện</a>
                                            <ul class='sub_menu'>
                                                <li>
                                                    <a id='64' href='index.php?ac=sanpham&maloai=64'>SALE</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a id='65' href='javascript:toggleSubmenu(65);'>ELISE BASIC</a>
                            <ul class='sub_menu' style='display:none'>
                                <li>
                                    <a id='66' href='index.php?ac=sanpham&maloai=66'>Áo</a>
                                </li>
                                <li><a id='67' href='index.php?ac=sanpham&maloai=67'>Quần</a></li>
                            </ul>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        function toggleSubmenu(id) {
                            $('#' + id).closest('li').children('ul').toggle();
                        }

                        $('.active').parentsUntil("nav").show();
                    </script>                
                </li>
                <li>
                    <a                         href='index.php?ac=lookbook'>BỘ SƯU TẬP</a>
                    <ul class="sub_menu">
                        <li>
                            <a href='index.php?ac=lookbook&catid=17'>Elise WOMAN</a>
                        </li>
                        <li>
                            <a href='index.php?ac=lookbook&catid=18'>Elise KIDS</a>
                        </li>
                        <li>
                            <a href='index.php?ac=lookbook&catid=19'>Elise BASIC</a>
                        </li>
                    </ul>
                </li>
                <li><a href='index.php?ac=video'>VIDEO</a></li>
                <li><a href='index.php?ac=cs'>CHĂM SÓC KHÁCH HÀNG</a></li>
                <li><a href='index.php?ac=about'>HỆ THỐNG CỬA HÀNG</a></li>
                <li><a href='index.php?ac=contact'>LIÊN HỆ</a></li>
                <li class="none_hotline">
                    <a href="#">CHĂM SÓC KH: 0968-866-568</a>
                </li>
            </ul>
        </nav>
        <!--end nav-->
        <form method="post" action="">
            <input type="text" name="tukhoa" placeholder="Tìm kiếm..."/>
            <input type="submit" name="timkiem" value=" "/>
        </form>
        <section id="box_link">
            <a target="_blank" href="https://www.facebook.com/elisevietnam"/><img src="<?php echo $BASE_URL ?>/images/social-facebook.png"
                                                                                  alt="link facebook" height="30"/></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCJQ_oyCa-XLriHtnotsAJnQ"><img src="<?php echo $BASE_URL ?>/images/social-youtube.png" alt="link youtube" height="30"/></a>
        </section>
        <!--End box_link-->
        <section id="box_address">
            <p>Bản quyền thuộc về
                Công ty cổ phần thời trang Elise<br/>
                Trụ sở chính:<br/>
                29 Thái Hà - Đống Đa - Hà Nội<br/>
                ĐT: 0439460368 (máy lẻ 0)<br/>
                Email: <a href="mailto:support@elise.vn">support@elise.vn</a>
            </p>
        </section>
        <!--End box_address-->
        <p style="width:100%;height:115px">&nbsp;</p>
    </section>
    <div id="downArrow" class="arrow down"></div>
    <!--End nav-->
</section>

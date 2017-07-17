<div class="innertube" id="PC-TOP">

    <div style="text-align:center; margin-top:30px;"><a href="/"><img src="<?php echo $BASE_URL;?>/images/logomobile.png" width="120px"></a></div>

    <div style="margin-top:20px;">

        <div style="margin-left:50px;">
            <div id='cssmenu'>
                <ul>
                    <li>
                        <a href='<?php echo $BASE_URL;?>' style="font-weight:bold;"><span><?php echo __('LABEL_HOME');?></span></a>
                    </li>
                    <li>
                        <a href='<?php echo $BASE_URL;?>/gioithieu' style="font-weight:bold;"><span><?php echo __('LABEL_INTRODUCTION');?></span></a>
                    </li>
                    <?php if (!empty($categories)): ?>
                    <li class='has-sub'><a href='#' style="font-weight:bold;"><span><?php echo __('LABEL_ELEHT_PRODUCTS');?></span></a>
                        <ul>
                            <?php foreach ($categories as $c): ?>
                            <li>
                                <a href='<?php echo $BASE_URL;?>/categories/<?php echo $c['id'];?>' style="font-weight:bold;"><span><?php echo $c['name']; ?></span></a>
                            </li>
<!--                            <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Kids</span></a>
                                <ul>
                                    <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Kids Girl</span></a>
                                        <ul>
                                            <li><a href='/index.php?ac=sanpham&maloai=52'><span>Chân váy</span></a></li>
                                            <li class='last'><a href='http://elise.vn/index.php?ac=sanpham&maloai=54'><span>Phụ kiện</span></a></li>
                                        </ul>
                                    </li>
                                    <li class='has-sub'><a href='#' style="font-weight:bold;"><span>Elise Kids Boy</span></a>
                                        <ul>
                                            <li><a href='/index.php?ac=sanpham&maloai=62'><span>Quần</span></a></li>
                                            <li class='last'><a href='#'><span>Phụ kiện</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li>
                        <a href='<?php echo $BASE_URL;?>/news' style="font-weight:bold;"><span><?php echo __('LABEL_NEWS');?></span></a>
                    </li>
                    <?php endif; ?>
                    <li class='last'><a href='/index.php?ac=contact' style="font-weight:bold;"><span><?php echo __('LABEL_CONTACT');?></span></a></li>
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
                <a href="https://www.facebook.com/elisevietnam" target="_blank"><img src="<?php echo $BASE_URL;?>/images/social-facebook.png" height="30" /></a>
            </div>

            <div style="float:left; margin-left:10px;">
                <a href="https://www.youtube.com/channel/UCJQ_oyCa-XLriHtnotsAJnQ" target="_blank"><img src="<?php echo $BASE_URL;?>/images/social-youtube.png" height="30" /></a>
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
                <img src="<?php echo $BASE_URL;?>/images/playing.gif" />
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

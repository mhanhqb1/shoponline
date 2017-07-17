
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Thời trang Elise</title>
        <link rel="shortcut icon" href="<?php echo $BASE_URL; ?>/favicon.ico" type="image/x-icon" />
        <link href='<?php echo $BASE_URL; ?>/css/kose.css?<?php echo VERSION_DATE;?>' rel='stylesheet' media="only screen and (min-width:750px)" />
        <link href='<?php echo $BASE_URL; ?>/css/mobile.css?<?php echo VERSION_DATE;?>' rel='stylesheet' media="only screen and (max-width:750px)"/>
        <link href='<?php echo $BASE_URL; ?>/css/slidebars.css?<?php echo VERSION_DATE;?>' rel='stylesheet' media="only screen and (max-width:750px)"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/styles.css?<?php echo VERSION_DATE;?>" />
        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js">
        </script><![endif]-->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="<?php echo $BASE_URL; ?>/js/slidebars.js?<?php echo VERSION_DATE;?>"></script>
        <script src="<?php echo $BASE_URL; ?>/js/script.js?<?php echo VERSION_DATE;?>"></script>
        <script src="<?php echo $BASE_URL; ?>/js/script2.js?<?php echo VERSION_DATE;?>"></script>
    </head>
    <body>

        <!--MOBILE TOP-->
        <?php echo $this->element('Layout/top'); ?>
        <!--End Mobile Top-->

        <!--Slidebar-->
        <?php echo $this->element('Layout/slidebar'); ?>
        <!--End Slidebar-->

        <!--Top cart-->
        <?php echo $this->element('Layout/topcart'); ?>
        <!--End top cart-->

        <!--Main content-->
        <div id="framecontent">
            <!-- PC Top -->
            <?php echo $this->element('Layout/pc_top'); ?>
            <!--End PC top-->

            <div id="maincontent">
                <div style="text-align:right; padding-right:4%; font-size:11px; position: absolute; z-index:101;clear:both;right: 0; z-index:101; clear:both; font-weight:normal;color:#797979;;letter-spacing:1px;background:#FFF;width:96%;height:30px;border-bottom:1px solid #ededed;line-height:30px;" id="PC-sign">
                    <a href="/index.php?ac=login">ĐĂNG NHẬP</a>
                    <a href="#" style="border:1px solid #ededed;margin:0 20px 0 20px;"></a>
                    <a href="/index.php?ac=giohang">GIỎ HÀNG</a>
                </div>
                
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <!--End main content-->

        <!--Footer-->
        <?php echo $this->element('Layout/footer'); ?>
        <!--End Footer-->
    </body>
</html>
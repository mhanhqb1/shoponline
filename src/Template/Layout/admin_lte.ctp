<!DOCTYPE html>
<html lang="vi">
    <head>
        <title><?php echo !empty($pageTitle) ? h($pageTitle) : DEFAULT_SITE_TITLE ?></title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <link href="<?php echo $BASE_URL ?>/favicon.ico" type="image/x-icon" rel="icon"/>
        <link href="<?php echo $BASE_URL ?>/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
        
        <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $BASE_URL ?>/AdminLTE/dist/css/AdminLTE.min.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL ?>/AdminLTE/dist/css/skins/skin-black-light.min.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL ?>/AdminLTE/plugins/pace/pace.min.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL ?>/AdminLTE/plugins/datepicker/datepicker3.css"/>
        <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/style.css?<?php echo VERSION_DATE ?>"/>
        
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black-light fixed">
        <div class="wrapper">
            <?php echo $this->element('Admin/header'); ?>
            <?php echo $this->element('Admin/sidebar'); ?>
            
            <div class="content-wrapper">
                <section class="content-header">
                    <?php if (!empty($breadcrumb)) : ?>
                        <?php echo $this->Breadcrumb->render($breadcrumb, $breadcrumbTitle); ?>
                    <?php endif ?>
                </section>
                
                <section class="content content_<?php echo $controller . '_' . $action; ?>">
                    <?php echo $this->Flash->render() ?>
                    <?php echo $this->fetch('content'); ?>
                </section>
            </div>
            <?php echo $this->element('Admin/footer'); ?>
        </div>
        
        <script type="text/javascript">
            var baseUrl = '<?php echo $BASE_URL ?>';
            var controller = '<?php echo $controller ?>';
            var action = '<?php echo $action ?>';
            var url = "<?php echo $url; ?>";
        </script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/js/jquery-migrate-1.4.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/AdminLTE/plugins/pace/pace.min.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/AdminLTE/plugins/fastclick/fastclick.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.ja.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL ?>/AdminLTE/dist/js/app.min.js"></script>
    </body>
</html>

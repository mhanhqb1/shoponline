<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <link href='<?php echo $BASE_URL ?>/css/style.css' rel='stylesheet'>
        <link rel='stylesheet' type='text/css' href='<?php echo $BASE_URL ?>/css/flexslider.css'>
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL ?>/css/jquery-ui-1.10.4.custom.min.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <script src="<?php echo $BASE_URL ?>/js/updatecart.js"></script>
        <script src="<?php echo $BASE_URL ?>/js/jquery-1.11.0.min.js"></script>
        <script src="<?php echo $BASE_URL ?>/js/jquery-ui-1.10.2.custom.min.js"></script>
        <script src="<?php echo $BASE_URL ?>/js/jquery.flexslider.js"></script>
        <script src="<?php echo $BASE_URL ?>/js/common.js"></script>
    </head>
    <body>
        <?= $this->Flash->render() ?>
        <!-- Mobile Top -->
        <?php echo $this->element('Layout/top'); ?>
        <?php echo $this->element('Layout/slidebar'); ?>
        <div id="wrapper">
            <?php echo $this->element('Layout/header'); ?>
            <?php echo $this->fetch('content') ?>
        </div>
        
        <?php echo $this->element('Layout/footer'); ?>
        
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - ELEHT</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $BASE_URL;?>/adm/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $BASE_URL;?>/adm/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $BASE_URL;?>/adm/dist/css/sb-adm-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $BASE_URL;?>/adm/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>

    <!-- jQuery -->
    <script src="<?php echo $BASE_URL;?>/adm/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $BASE_URL;?>/adm/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $BASE_URL;?>/adm/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $BASE_URL;?>/adm/dist/js/sb-adm-2.js"></script>

</body>

</html>

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Content will be updated">
        <meta name="author" content="AnhMH">
        <title><?php echo $pageTitle; ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $BASE_URL; ?>/adm/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo $BASE_URL; ?>/adm/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo $BASE_URL; ?>/adm/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo $BASE_URL; ?>/adm/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="<?php echo $BASE_URL; ?>/adm/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo $BASE_URL; ?>/adm/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
        <script src="<?php echo $BASE_URL; ?>/adm/js/tinymce_upload_image.js"></script>
        <script src="tinymce/tinymce.js"></script>

        <script>
            tinymce.init({
                selector: "textarea",
                theme: "modern",
                language: "en",
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager| print preview media fullpage | forecolor backcolor emoticons",
                image_advtab: true,

                external_filemanager_path: "../filemanager/",
                filemanager_title: "Responsive Filemanager",
                external_plugins: {"filemanager": "../../filemanager/plugin.min.js"}
            });
        </script>
    </head>

    <body>

        <div id="wrapper">
            <?php echo $this->element('Admin/menu'); ?>
            <!-- Page Content -->
            <div id="page-wrapper">
                <?= $this->fetch('content') ?>
            </div>

        </div>
        <!-- jQuery -->
        <script src="<?php echo $BASE_URL; ?>/adm/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $BASE_URL; ?>/adm/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo $BASE_URL; ?>/adm/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo $BASE_URL; ?>/adm/dist/js/sb-admin-2.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?php echo $BASE_URL; ?>/adm/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/adm/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
                $(document).ready(function () {
                    $('#dataTables-example').DataTable({
                        responsive: true
                    });
                });
        </script>
    </body>

</html>


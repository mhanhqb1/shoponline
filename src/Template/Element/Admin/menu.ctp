
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">ELEHT</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right"> 
        <li><a href="<?php echo $BASE_URL;?>/admin/login/logout"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a></li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Quản lý sản phẩm<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo $BASE_URL;?>/admin/products">Danh sách sản phẩm</a>
                        </li>
                        <li>
                            <a href="<?php echo $BASE_URL;?>/admin/products/add">Thêm sản phẩm</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-book"></i> Quản lý danh mục<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo $BASE_URL;?>/admin/categories">Danh sách danh mục</a>
                        </li>
                        <li>
                            <a href="<?php echo $BASE_URL;?>/admin/categories/add">Thêm danh mục</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-book"></i> Quản lý hình ảnh<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="index.php?controller=sliders&action=list">Danh sách hình ảnh</a>
                        </li>
                        <li>
                            <a href="index.php?controller=sliders&action=add">Thêm hình ảnh</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-book"></i> Khác<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="index.php?controller=gioithieu&action=list">Quản lý trang giới thiệu</a>
                        </li>
                        <li>
                            <a href="index.php?controller=cohoihoptac&action=list">Quản lý trang cơ hội hợp tác</a>
                        </li>
                        <li>
                            <a href="index.php?controller=settings&action=list">Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

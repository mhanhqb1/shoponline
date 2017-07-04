<header class="main-header">
    <a href="<?php echo $BASE_URL ?>" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> ELEHT</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">&nbsp;</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo $BASE_URL ?>/images/logo.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo h($AppUI['display_name']) ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="<?php echo $BASE_URL ?>/images/logo.png" class="img-circle" alt="User Image">
                            <p>
                                <?php echo h($AppUI['display_name']) ?>
                            </p>
                        </li>
                        
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="<?php echo $BASE_URL ?>/admin/login/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>&nbsp;<?php echo __('LABEL_LOGOUT') ?></a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

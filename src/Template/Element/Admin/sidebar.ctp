<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $BASE_URL ?>/images/logo.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo h($AppUI['display_name']) ?></p>
                <a href="javascript::void();"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?php echo $BASE_URL ?>/admin"><i class="fa fa-dashboard"></i> <span><?php echo __('LABEL_DASHBOARD') ?></span></a>
            </li>
            <li class="treeview <?php if (in_array($controller, array('products', 'categories'))) echo ' active ' ?>">
                <a href="#">
                    <i class="fa fa-list"></i> <span><?php echo __('LABEL_PRODUCT_MANAGEMENT') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($controller == 'products') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/admin/products"><i class="fa fa-product-hunt"></i> <?php echo __('LABEL_PRODUCT_LIST') ?></a></li>
                    <li class="<?php if ($controller == 'categories') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/admin/categories"><i class="fa fa-tags"></i> <?php echo __('LABEL_CATEGORY_LIST') ?></a></li>
                </ul>
            </li>
            <li class="treeview <?php if (in_array($controller, array('settings'))) echo ' active ' ?>">
                <a href="#">
                    <i class="fa fa-database"></i> <span><?php echo __('LABEL_MASTER') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if (in_array($controller, array('settings'))) echo ' active ' ?>">
                        <a href="#">
                            <i class="fa fa-book"></i> <?php echo __('LABEL_SKILL_MASTER') ?>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if ($controller == 'skillgroups') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/skillgroups"><i class="fa fa-pencil-square"></i> <?php echo __('LABEL_SKILL_GROUPS_LIST') ?></a></li>
                        </ul>                        
                    </li>
                    <li class="<?php if ($controller == 'kabochabuildings') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/kabochabuildings"><i class="fa fa-building"></i> <?php echo __('LABEL_KABOCHABUILDING_TITLE') ?></a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>

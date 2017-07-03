    <aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?php echo $BASE_URL ?>"><i class="fa fa-dashboard"></i> <span><?php echo __('LABEL_DASHBOARD') ?></span></a>
            </li>
            <li class="treeview <?php if(in_array($controller, array('users'))) echo ' active ' ?>">
                <a href="#">
                    <i class="fa fa-users"></i> <span><?php echo __('LABEL_USER_GROUP') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($controller == 'users' && $action !='import') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/users"><i class="fa fa-user"></i> <?php echo __('LABEL_USERS_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'users' && $action=='import') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/users/import"><i class="fa fa-file-excel-o"></i> <?php echo __('LABEL_USER_CSV') ?></a></li>
                </ul>
            </li>
            <li class="treeview <?php if(in_array($controller, array('jobs','items','notes','itemsets','kabochabuildings','pointworks','pointgets','pointitems','userboughtitems','publicinformations','skills','skillgroups','configdefaulticons','usernotifications','counselingstaffs','recommendsites'))) echo ' active ' ?>">
                <a href="#">
                    <i class="fa fa-database"></i> <span><?php echo __('LABEL_MASTER') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if(in_array($controller, array('skills', 'skillgroups'))) echo ' active ' ?>">
                        <a href="#">
                            <i class="fa fa-book"></i> <?php echo __('LABEL_SKILL_MASTER') ?>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($controller == 'skillgroups') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/skillgroups"><i class="fa fa-pencil-square"></i> <?php echo __('LABEL_SKILL_GROUPS_LIST') ?></a></li>
                            <li class="<?php if($controller == 'skills') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/skills"><i class="fa fa-pencil"></i> <?php echo __('LABEL_SKILLS_LIST') ?></a></li>
                        </ul>                        
                    </li>
                    <li class="<?php if($controller == 'kabochabuildings') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/kabochabuildings"><i class="fa fa-building"></i> <?php echo __('LABEL_KABOCHABUILDING_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'pointworks') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/pointworks"><i class="fa fa-tasks"></i> <?php echo __('LABEL_POINT_WORKS_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'pointgets') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/pointgets"><i class="fa fa-list"></i> <?php echo __('LABEL_POINT_GETS_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'pointitems') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/pointitems"><i class="fa fa-list"></i> <?php echo __('LABEL_POINT_ITEMS_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'userboughtitems') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/userboughtitems"><i class="fa fa-list"></i> <?php echo __('LABEL_USER_BOUGH_ITEMS_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'publicinformations') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/publicinformations"><i class="fa fa-bell-slash"></i> <?php echo __('LABEL_PUBLIC_INFORMATION_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'usernotifications') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/usernotifications"><i class="fa fa-bell"></i> <?php echo __('LABEL_USER_NOTIFICATIONS_LIST') ?></a></li>
                    <li class="<?php if($controller == 'configdefaulticons') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/configdefaulticons"><i class="fa fa-cog"></i> <?php echo __('LABEL_CONFIG_DEFAULT_ICON') ?></a></li>
                    <li class="<?php if($controller == 'counselingstaffs') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/counselingstaffs"><i class="fa fa-male"></i> <?php echo __('LABEL_COUNSELING_STAFFS_LIST') ?></a></li>
                    <li class="<?php if($controller == 'recommendsites') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/recommendsites"><i class="fa fa-comment"></i> <?php echo __('LABEL_RECOMMEND_SITES_LIST') ?></a></li>
                    <li class="<?php if($controller == 'jobs') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/jobs"><i class="fa fa-calendar-plus-o"></i> <?php echo __('LABEL_JOBS_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'notes') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/notes"><i class="fa fa-sticky-note"></i> <?php echo __('LABEL_NOTES_LIST_TILE') ?></a></li>
                </ul>
            </li>
            <li class="treeview <?php if(in_array($controller, array('userpointlogs','userspointworksactionlogs','counselingformlogs'))) echo ' active ' ?>">
                <a href="#">
                    <i class="fa fa-cubes"></i> <span><?php echo __('LABEL_MENU_LOG') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($controller == 'userpointlogs') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/userpointlogs"><i class="fa fa-file-code-o"></i> <?php echo __('LABEL_USERPOINTLOGS_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'userspointworksactionlogs') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/userspointworksactionlogs"><i class="fa fa-file-code-o"></i> <?php echo __('LABEL_USER_POINT_WORK_ACTION_LOG_TITLE') ?></a></li>
                    <li class="<?php if($controller == 'counselingformlogs') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/counselingformlogs"><i class="fa fa-file-code-o"></i> <?php echo __('LABEL_COUNSELING_FORM_LOGS_LIST') ?></a></li>
                </ul>
            </li>
            <li class="treeview <?php if(in_array($controller, array('admins'))) echo ' active ' ?>">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span><?php echo __('LABEL_SETTING') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($controller == 'admins') echo ' active ' ?>"><a href="<?php echo $BASE_URL ?>/admins"><i class="fa fa-user"></i> <?php echo __('LABEL_ADMIN_LIST') ?></a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>

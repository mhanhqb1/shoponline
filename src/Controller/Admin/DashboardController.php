<?php

/* 
 * Home process
 */

namespace App\Controller\Admin;

use App\Controller\AdminController;

class DashboardController extends AdminController {
    
    /**
     * Dashboard
     */
    public function index() {
        include('Bus/Dashboard/index.php');
    }
}

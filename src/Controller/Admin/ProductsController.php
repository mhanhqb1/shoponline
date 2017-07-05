<?php

/* 
 * Home process
 */

namespace App\Controller\Admin;

use App\Controller\AdminController;

class ProductsController extends AdminController {
    
    /**
     * Product list page
     */
    public function index() {
        include('Bus/Products/index.php');
    }
    
    /**
     * Product update page
     */
    public function update($id = '') {
        include ('Bus/Products/update.php');
    }
}

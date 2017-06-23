<?php

/* 
 * Home process
 */

namespace App\Controller\Admin;

use App\Controller\AdminController;

class ProductsController extends AdminController {
    
    public function index() {
        include('Bus/Products/index.php');
    }
    
    public function add() {
        include('Bus/Products/add.php');
    }
    
    public function edit($id) {
        include('Bus/Products/edit.php');
    }
}

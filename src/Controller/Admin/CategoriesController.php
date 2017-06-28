<?php

/* 
 * Home process
 */

namespace App\Controller\Admin;

use App\Controller\AdminController;

class CategoriesController extends AdminController {
    
    public function index() {
        include('Bus/Categories/index.php');
    }
    
    public function add() {
        include('Bus/Categories/add.php');
    }
    
    public function edit($id) {
        include('Bus/Categories/edit.php');
    }
}

<?php

/* 
 * Login process
 */

namespace App\Controller\Admin;

use App\Controller\AdminController;

class LoginController extends AdminController {
    
    public function index() {
        if ($this->request->is('post')) {
            $param = $this->request->data;
            echo '<pre>';
            print_r($param);
            die();
        }
        
    }
    
    public function logout() {
        if ($this->Auth->logout()) {
            return $this->redirect('/admin/login');
        }
    }
}

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
            $user = array(
                'id' => 1
            );
            $this->Auth->setUser($user);
            return $this->redirect('/admin');
        }
        
    }
    
    public function logout() {
        if ($this->Auth->logout()) {
            return $this->redirect('/admin/login');
        }
    }
}

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
    
    /**
     * Delete product
     */
    public function delete($id) {
//        $this->request->allowMethod(['post', 'delete']);

        $data = $this->Products->get($id);
        if ($this->Products->delete($data)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}

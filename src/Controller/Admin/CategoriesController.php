<?php

/*
 * Home process
 */

namespace App\Controller\Admin;

use App\Controller\AdminController;

class CategoriesController extends AdminController {

    /**
     * Category list page
     */
    public function index() {
        include('Bus/Categories/index.php');
    }

    /**
     * Category update page
     */
    public function update($id = '') {
        include ('Bus/Categories/update.php');
    }

    /**
     * Delete category
     */
    public function delete($id) {
//        $this->request->allowMethod(['post', 'delete']);

        $data = $this->Categories->get($id);
        if ($this->Categories->delete($data)) {
            return $this->redirect(['action' => 'index']);
        }
    }

}

<?php

/* 
 * Home process
 */

namespace App\Controller\Admin;

use App\Controller\AdminController;

class SlidersController extends AdminController {
    
    /**
     * Slider list page
     */
    public function index() {
        include('Bus/Sliders/index.php');
    }
    
    /**
     * Slider update page
     */
    public function update($id = '') {
        include ('Bus/Sliders/update.php');
    }
    
    /**
     * Delete Slider
     */
    public function delete($id) {
        $data = $this->Sliders->get($id);
        if ($this->Sliders->delete($data)) {
            return $this->redirect(['action' => 'index']);
        }
    }
}

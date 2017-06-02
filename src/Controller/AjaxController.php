<?php

/* 
 * Ajax process
 */

namespace App\Controller;

class AjaxController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->autoRender = false;
    }
    
}

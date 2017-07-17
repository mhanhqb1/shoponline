<?php

/* 
 * Home process
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

class HomeController extends AppController {
    
    public function index() {
        
    }
    
    public function clearcache() {
        // Delete language cache
        $files = glob(ROOT . '/tmp/cache/persistent/*'); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file)) {
                @unlink($file); // delete file
            }
        }
        
        echo 'Done';
        exit;
    }
    
}

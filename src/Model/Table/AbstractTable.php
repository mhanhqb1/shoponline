<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AbstractTable extends Table
{
    /**
     * Convert data to array
     */
    public static function _toArray($data) {
        if (empty($data)) {
            return array();
        }
        return json_decode(json_encode($data), true);
    }
    
}

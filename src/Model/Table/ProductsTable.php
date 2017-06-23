<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends Table
{
    public $_displayField = array(
        'id' => array(
            'title' => 'ID'
        ),
        'title' => array(
            'title' => 'Tieu de'
        ),
        'detail' => array(
            'title' => 'Chi tiet'
        ),
        'category' => array(
            'title' => 'Danh muc'
        ),
        'discount' => array(
            'title' => 'Giam gia'
        )
    );
    
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
//        $validator
//            ->notEmpty('title')
//            ->requirePresence('title')
//            ->notEmpty('body')
//            ->requirePresence('body');

        return $validator;
    }
}

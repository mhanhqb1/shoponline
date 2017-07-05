<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoriesTable extends Table
{
    public $_displayField = array();
    
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
    
    // Get All
    public function getAll($param = array()) {
        return $this->find('all');
    }
    
    // Get list
    public function getList($param) {
        // init
        $data = array();
        $total = 0;
        
        // query
        $query = $this->find()
            ->select([
                'id', 
                'name',
                'root_id'
            ])
        ;
        
        // filter
        if (!empty($param['id'])) {
            $query->where(['id =' => $param['id']]);
        }
        if (!empty($param['name'])) {
            $query->where(['name LIKE' => "%{$param['name']}%"]);
        }
        if (!empty($param['root_id'])) {
            $query->where(['root_id =' => $param['root_id']]);
        }
        
        // limit
        if (!empty($param['page']) && !empty($param['limit'])) {
            $offset = ($param['page'] - 1) * $param['limit'];
            $query->limit($param['limit'])->offset($offset);
        }
        
        // order
        $query->order(['id' => 'DESC']);
        
        // get data
        $data = $query->all();
        $total = $this->find('all')->count();
        
        return array(
            'data' => $data->toArray(),
            'total' => $total
        );
    }
}

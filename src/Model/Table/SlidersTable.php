<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SlidersTable extends AbstractTable
{
    public $_tableName = 'sliders';
    
    /**
     * Initialize
     */
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    /**
     * Validation
     */
    public function validationDefault(Validator $validator)
    {
//        $validator
//            ->notEmpty('title')
//            ->requirePresence('title')
//            ->notEmpty('body')
//            ->requirePresence('body');

        return $validator;
    }
    
    /**
     * Get list
     */
    public function getList($param) {
        // init
        $data = array();
        $total = 0;
        
        // query
        $tableName = $this->_tableName;
        
        // query
        $query = $this->find()
            ->select([
                'id',
                'url',
                'priority',
                'image_path'
            ])
        ;
        
        // filter
        if (!empty($param['id'])) {
            $query->where(['id =' => $param['id']]);
        }
        if (!empty($param['priority'])) {
            $query->where(['priority =' => $param['priority']]);
        }
        
        // limit
        if (!empty($param['page']) && !empty($param['limit'])) {
            $offset = ($param['page'] - 1) * $param['limit'];
            $query->limit($param['limit'])->offset($offset);
        }
        
        // order
        $query->order(['id' => 'DESC']);
        
        // get data
        $data = $this->_toArray($query->all()->toArray());
        $total = $this->find('all')->count();
        
        return array(
            'data' => $data,
            'total' => $total
        );
    }
    
    /**
     * Get total
     */
    public function getTotal() {
        return $this->find('all')->count();
    }
    
    /**
     * Get detail
     */
    public function getDetail($param) {
        return $this->get($param['id']);
    }
    
    /**
     * Get list
     */
    public function getAll($param) {
        // init
        $data = array();
        $tableName = $this->_tableName;
        
        // query
        $query = $this->find()
            ->select([
                'id',
                'url',
                'priority',
                'image_path'
            ])
        ;
        
        // filter
        if (!empty($param['id'])) {
            $query->where(['id =' => $param['id']]);
        }
        
        // limit
        if (!empty($param['page']) && !empty($param['limit'])) {
            $offset = ($param['page'] - 1) * $param['limit'];
            $query->limit($param['limit'])->offset($offset);
        }
        
        // order
        $query->order(['priority' => 'DESC']);
        
        // get data
        $data = $this->_toArray($query->all()->toArray());
        
        return $data;
    }
}

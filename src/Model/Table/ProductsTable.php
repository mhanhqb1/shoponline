<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends AbstractTable
{
    public $_tableName = 'products';
    
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
                $tableName.'.id',
                $tableName.'.title',
                $tableName.'.price',
                $tableName.'.category',
                $tableName.'.image_path',
                'c.name',
                'c.id'
            ])
            ->join([
                'table' => 'categories',
                'alias' => 'c',
                'type' => 'LEFT',
                'conditions' => 'c.id = '.$tableName.'.category',
            ])
        ;
        
        // filter
        if (!empty($param['id'])) {
            $query->where([$tableName.'.id =' => $param['id']]);
        }
        if (!empty($param['title'])) {
            $query->where([$tableName.'.title LIKE' => "%{$param['title']}%"]);
        }
        if (!empty($param['category'])) {
            $query->where([$tableName.'.category =' => $param['category']]);
        }
        
        // limit
        if (!empty($param['page']) && !empty($param['limit'])) {
            $offset = ($param['page'] - 1) * $param['limit'];
            $query->limit($param['limit'])->offset($offset);
        }
        
        // order
        $query->order([$tableName.'.id' => 'DESC']);
        
        // get data
        $data = $this->_toArray($query->all()->toArray());
        $total = $this->find('all')->count();
        $result = array();
        if (!empty($data)) {
            foreach ($data as $val) {
                $tmp = $val['products'];
                $tmp['category_id'] = $val['c']['id'];
                $tmp['category_name'] = $val['c']['name'];
                $result[] = $tmp;
            }
        }
        
        return array(
            'data' => $result,
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
                $tableName.'.id',
                $tableName.'.title',
                $tableName.'.price',
                $tableName.'.category',
                $tableName.'.image_path',
                'c.name',
                'c.id'
            ])
            ->join([
                'table' => 'categories',
                'alias' => 'c',
                'type' => 'LEFT',
                'conditions' => 'c.id = '.$tableName.'.category',
            ])
        ;
        
        // filter
        if (!empty($param['id'])) {
            $query->where([$tableName.'.id =' => $param['id']]);
        }
        if (!empty($param['title'])) {
            $query->where([$tableName.'.title LIKE' => "%{$param['title']}%"]);
        }
        if (!empty($param['category'])) {
            $query->where([$tableName.'.category =' => $param['category']]);
        }
        
        // limit
        if (!empty($param['page']) && !empty($param['limit'])) {
            $offset = ($param['page'] - 1) * $param['limit'];
            $query->limit($param['limit'])->offset($offset);
        }
        
        // order
        $query->order(['products.id' => 'DESC']);
        
        // get data
        $data = $this->_toArray($query->all()->toArray());
        
        $result = array();
        if (!empty($data)) {
            foreach ($data as $val) {
                $tmp = $val['products'];
                $tmp['category_id'] = $val['c']['id'];
                $tmp['category_name'] = $val['c']['name'];
                $result[] = $tmp;
            }
        }
        
        return $result;
    }
}

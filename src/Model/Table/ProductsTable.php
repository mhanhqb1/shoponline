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
    
    /**
     * Get list
     */
    public function getList($param) {
        // init
        $data = array();
        $total = 0;
        
        // query
        $query = $this->find()
            ->select([
                'id', 
                'title',
                'price',
                'category'
            ])
        ;
        
        // filter
        if (!empty($param['id'])) {
            $query->where(['id =' => $param['id']]);
        }
        if (!empty($param['title'])) {
            $query->where(['title LIKE' => "%{$param['title']}%"]);
        }
        if (!empty($param['category'])) {
            $query->where(['category =' => $param['category']]);
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
    
    /**
     * Get detail
     */
    public function getDetail($param) {
        return $this->get($param['id']);
    }
}

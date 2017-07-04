<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdatePointitemForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
                        ->notEmpty('name', __('LABEL_NAME_EMPTY'))
                        ->notEmpty('description', __('LABEL_DESCRIPTION_EMPTY'))
                        ->notEmpty('point', __('LABEL_POINT_EMPTY'))
                        ->notEmpty('start_date', __('LABEL_START_DATE_EMPTY'))
                        ->notEmpty('end_date', __('LABEL_END_DATE_EMPTY'))
                        ->allowEmpty('limit_quantity')
                        ->add('point', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_POINT_NUMBER')
                        ])
                        ->add('limit_quantity', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_QUANTITY_LIMIT_NUMBER')
                        ])
                        ->add('end_date', 'comparison', [
                            'rule' => function ($value, $context) {
                                return (strtotime($value) >= strtotime($context['data']['start_date']));
                            },
                            'message' => __('LABEL_START_DATE_LESSTHAN_END_DATE')
        ]);
    }

}

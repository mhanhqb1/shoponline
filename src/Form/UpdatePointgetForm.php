<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdatePointgetForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
                        ->notEmpty('name', __('LABEL_NAME_EMPTY'))
                        ->notEmpty('point', __('LABEL_POINT_EMPTY'))
                        ->allowEmpty('end_date')
                        ->add('point', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_POINT_NUMBER')
                        ])
                        ->add('end_date', 'comparison', [
                            'rule' => function ($value, $context) {
                                if (!(empty($value)))
                                    return (strtotime($value) >= strtotime($context['data']['start_date']));
                            },
                            'message' => __('LABEL_START_DATE_LESSTHAN_END_DATE')
        ]);
    }

}

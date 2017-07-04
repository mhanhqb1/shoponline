<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateRecommendSiteForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
                        ->notEmpty('name', __('LABEL_RECOMMEND_SITES_NAME_EMPTY'))
                        ->notEmpty('url', __('LABEL_RECOMMEND_SITES_URL_EMPTY'))
                        ->allowEmpty('priority')
                        ->add('priority', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_PRIORITY_ISNUMBER')
                        ])
        ;
    }

}

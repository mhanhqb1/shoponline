<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateKabochabuildingForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('building_code', __('LABEL_USERS_KABOCHA_BUILDING_CODE_EMPTY'))
            ->notEmpty('name', __('LABEL_USERS_KABOCHA_BUILDING_NAME_EMPTY'))
            ->notEmpty('rooms', __('LABEL_KABOCHABUILDING_ROOMS_EMPTY'))
            ->allowEmpty('longitude')
            ->allowEmpty('latitude')
            ->add('latitude', 'comparison', [
                'rule' => function ($value, $context) {
                    return is_numeric($value);
                },
                'message' => __('LABEL_LATITUDE_NUMBER')
            ])
            ->add('longitude', 'comparison', [
                'rule' => function ($value, $context) {
                    return is_numeric($value);
                },
                'message' => __('LABEL_LONGTITUDE_NUMBER')
            ])
        ;
    }

}

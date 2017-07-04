<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateConfigDefaultIconForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('name', __('LABEL_CONFIG_DEFAULT_ICONS_NAME_NOT_EMPTY'))
            ->notEmpty('icon_path', __('LABEL_CONFIG_DEFAULT_ICONS_PATH_NOT_EMPTY'))
            ->allowEmpty('priority')
            ->add('priority', 'comparison', [
                'rule' => function ($value, $context) {
                            return is_numeric($value);
                        },
               'message' => __('LABEL_PRIORITY_ISNUMBER')
            ]);
    }
}

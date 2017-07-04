<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateSkillForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('name', __('LABEL_SKILLS_NAME_NOT_EMPTY'))
            ->notEmpty('value_type',__('LABEL_SKILL_VALUE_TYPE_NOT_EMPTY'))
            ->notEmpty('skill_group_id',__('LABEL_SKILL_GROUPS_NAME_NOT_EMPTY'))
            ->add('value_type', 'comparison', [
                'rule' => function ($value, $context) {
                            return is_numeric($value);
                        },
               'message' => __('LABEL_TYEPE_VALUE_IS_NUMBER')
            ])
        ;
    }

}

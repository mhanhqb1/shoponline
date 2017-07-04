<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateSkillgroupForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('name', __('LABEL_SKILL_GROUPS_NAME_NOT_EMPTY'))
            ->notEmpty('setting_page',__('LABEL_SETTING_PAGE_NOT_EMPTY'))
            ->notEmpty('mypage_page',__('LABEL_MYPAGE_PAGE_NOT_EMPTY'))
            ->add('setting_page', 'comparison', [
                'rule' => function ($value, $context) {
                            return is_numeric($value);
                        },
               'message' => __('LABEL_SETTING_PAGE_IS_NUMBER')
            ])
            ->add('mypage_page', 'comparison', [
                'rule' => function ($value, $context) {
                            return is_numeric($value);
                        },
               'message' => __('LABEL_MYPAGE_PAGE_IS_NUMBER')
            ])
        ;
    }

}

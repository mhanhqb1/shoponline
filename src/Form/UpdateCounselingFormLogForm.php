<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateCounselingFormLogForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('counseling_staff_id', __('LABEL_COUNSELING_FORM_LOGS_STAFF_ID_EMPTY'))
            ->notEmpty('name', __('LABEL_COUNSELING_FORM_LOGS_NAME_EMPTY'))
            ->notEmpty('email', __('LABEL_COUNSELING_FORM_LOGS_EMAIL_EMPTY'))
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => __('EMAIL_NOT_MATCH')
            ]) 
            ->notEmpty('tel', __('LABEL_COUNSELING_FORM_LOGS_TEL_EMPTY'))
            ->notEmpty('counseling_type', __('LABEL_COUNSELING_FORM_LOGS_COUNSELING_TYPE_EMPTY'))
            ->add('counseling_type', 'comparison', [
                'rule' => function ($value, $context) {
                    return is_numeric($value);
                },
                'message' => __('LABEL_COUNSELING_FORM_LOGS_COUNSELING_TYPE_NUMBER')
            ])
            ->notEmpty('counseling_content', __('LABEL_COUNSELING_FORM_LOGS_COUNSELING_CONTENT_EMPTY'))
            ->notEmpty('other_content', __('LABEL_COUNSELING_FORM_LOGS_OTHER_CONTENT_EMPTY'));
    }
}

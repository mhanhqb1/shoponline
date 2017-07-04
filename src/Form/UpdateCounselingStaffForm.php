<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateCounselingStaffForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('counseling_staff_id', __('LABEL_COUNSELING_FORM_LOGS_STAFF_ID_EMPTY'))
            ->notEmpty('name', __('LABEL_COUNSELING_STAFFS_NAME_EMPTY'))
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => __('EMAIL_NOT_MATCH')
            ])
            ->notEmpty('email', __('LABEL_COUNSELING_STAFFS_EMAIL_EMPTY'));
    }
}

<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateUserForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('name', __('LABEL_USERS_NAME_EMPTY'))
            ->notEmpty('nick_name', __('LABEL_USERS_NICKNAME_EMPTY'))
            ->notEmpty('email', __('LABEL_USERS_EMAIL_EMPTY'))
            ->notEmpty('is_residence_check', __('LABEL_USERS_IS_RESIDENCE_CHECK_EMPTY'))
            ->notEmpty('kabocha_building_id', __('LABEL_USERS_KABOCHA_BUILDING_NAME_EMPTY'))
            ->allowEmpty('password', __('new password_EMPTY'))
            ->allowEmpty('password_confirm', __('confirm password_EMPTY'))
            ->email('email',__('EMAIL_NOT_MATCH'))    
            ->sameAs('password_confirm', 'password', __('MESSAGE_PASSWORD_CONFIRM_NOT_MATCH'))
        ;
    }

}

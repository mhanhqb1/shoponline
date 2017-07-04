<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateUserChangePaswordForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator            
            ->notEmpty('password', __('MESSAGE_REQUIRED_LOGIN_PASSWORD'))
            ->minLength('password', 6, __('MESSAGE_PASSWORD_MIN_LENGTH_ERROR'))
            ->notEmpty('password_confirm', __('MESSAGE_REQUIRED_LOGIN_PASSWORD_CONFIRM'))            
            ->sameAs('password_confirm', 'password', __('MESSAGE_PASSWORD_CONFIRM_NOT_MATCH'))
        ;
    }

}

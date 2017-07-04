<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateUserNotificationForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('title', __('LABEL_USER_NOTIFICATIONS_TITLE_EMPTY'))
            ->notEmpty('target_url', __('LABEL_USER_NOTIFICATIONS_TARGET_URL_EMPTY'))
            ->notEmpty('target_url_label', __('LABEL_USER_NOTIFICATIONS_TARGET_URL_LABEL_EMPTY'))
            ->notEmpty('is_important', __('LABEL_USER_NOTIFICATIONS_IS_IMPORTANT_EMPTY'))
        ;
    }

}

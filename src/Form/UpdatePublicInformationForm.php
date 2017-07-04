<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdatePublicInformationForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
            ->notEmpty('title', __('LABEL_TITLE_INFORMATION_NOT_EMPTY'))
            ->notEmpty('public_date', __('LABEL_PUBLIC_INFORMATION_NOT_EMPTY'))
        ;
    }

}

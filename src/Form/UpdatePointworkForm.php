<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdatePointworkForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
                        ->notEmpty('title', __('LABEL_POINT_WORK_TITLE_EMPTY'))
                        ->notEmpty('tracking_type', __('LABEL_POINT_WORK_TRACKING_TYPE_EMPTY'))
                        ->notEmpty('display_start_date', __('LABEL_POINT_WORK_DISPLAY_START_DATE_EMPTY'))
                        ->notEmpty('display_end_date', __('LABEL_POINT_WORK_DISPLAY_END_DATE_EMPTY'))
                        ->notEmpty('entry_start_date', __('LABEL_POINT_WORK_ENTRY_START_DATE_EMPTY'))
                        ->notEmpty('entry_end_date', __('LABEL_POINT_WORK_ENTRY_END_DATE_EMPTY'))
                        ->notEmpty('distribution_limit', __('LABEL_POINT_WORK_DISTRIBUTION_LIMIT_EMPTY'))
                        ->notEmpty('priority', __('LABEL_POINT_WORK_PRIORITY_EMPTY'))
                        ->add('distribution_limit', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_DISTRIBUTION_LIMIT_ISNUMBER')
                        ])
                        ->add('priority', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_PRIORITY_ISNUMBER')
                        ])
                        ->add('entry_start_date', 'comparison', [
                            'rule' => function ($value, $context) {
                                return (strtotime($value) >= strtotime($context['data']['display_start_date']));
                            },
                            'message' => __('LABEL_ENTRY_START_DATE_GREATERTHAN_DISPLAY_START_DATE')
                        ])
                        ->add('display_end_date', 'comparison', [
                            'rule' => function ($value, $context) {
                                return (strtotime($value) >= strtotime($context['data']['entry_end_date']));
                            },
                            'message' => __('LABEL_ENTRY_END_DATE_LESSTHAN_DISPLAY_END_DATE')
                        ])
                        ->add('display_start_date', 'comparison', [
                            'rule' => function ($value, $context) {
                                return (strtotime($value) <= strtotime($context['data']['display_end_date']));
                            },
                            'message' => __('LABEL_START_DATE_LESSTHAN_END_DATE')
                        ])
                        ->add('entry_end_date', 'comparison', [
                            'rule' => function ($value, $context) {
                                return (strtotime($value) >= strtotime($context['data']['entry_start_date']));
                            },
                            'message' => __('LABEL_START_DATE_LESSTHAN_END_DATE')
        ]);
    }

}

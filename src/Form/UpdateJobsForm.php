<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Validation\Validator;

class UpdateJobsForm extends Form {

    /**
     * Build Validator
     * 
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {
        return $validator
                        ->notEmpty('name', __('LABEL_JOBS_NAME_EMPTY'))
                        ->notEmpty('job_category', __('LABEL_JOBS_CATEGORY_EMPTY'))
                        ->allowEmpty('display_start_date', __('LABEL_POINT_WORK_DISPLAY_START_DATE_EMPTY'))
                        ->allowEmpty('display_end_date', __('LABEL_POINT_WORK_DISPLAY_END_DATE_EMPTY'))
                        ->allowEmpty('entry_start_date', __('LABEL_POINT_WORK_ENTRY_START_DATE_EMPTY'))
                        ->allowEmpty('entry_end_date', __('LABEL_POINT_WORK_ENTRY_END_DATE_EMPTY'))
                        ->allowEmpty('latitude')
                        ->allowEmpty('longitude')
                        ->allowEmpty('contact_email')
//                        ->notEmpty('contact_email', __('LABEL_JOBS_CONTACT_EMAIL_EMPTY'))
                        ->add('contact_email', 'validFormat', [
                            'rule' => 'email',
                            'message' => __('EMAIL_NOT_MATCH')
                        ])
                        ->add('latitude', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_LATITUDE_NUMBER')
                        ])
                        ->add('longitude', 'comparison', [
                            'rule' => function ($value, $context) {
                                return is_numeric($value);
                            },
                            'message' => __('LABEL_LONGTITUDE_NUMBER')
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


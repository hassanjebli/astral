<?php
return [
    // resource labels and fields
    'category' => [
        'sections' => [
            'general_information' => 'General Information',
        ],
        'navigation' => [
            'label' => 'Category',
            'model_label' => 'Category',
            'model_label_plural' => 'Categories',
        ],
        'fields' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'parent_category' => 'Parent Category',
            'sort' => 'Sort Order',
            'is_active' => 'Status',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ],
        'actions' => [
            'toggle_status' => 'Toggle Status',
        ],
    ],
    // common fields
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',


    // notifications
    'notifications' => [
        'success' => [
            'default_title' => 'Success',
            'default_body' => 'The operation was completed successfully.',
        ],
        'error' => [
            'default_title' => 'Error',
            'default_body' => 'An error occurred while processing your request.',
        ],
        'warning' => [
            'default_title' => 'Warning',
            'default_body' => 'Please be cautious while performing this action.',
        ],
        'info' => [
            'default_title' => 'Information',
            'default_body' => 'Here is some important information regarding your action.',
        ],
        'loading' => [
            'default_title' => 'Loading',
            'default_body' => 'Your request is being processed. Please wait...',
        ],
        'confirmation' => [
            'default_title' => 'Please Confirm',
            'default_body' => 'Are you sure you want to proceed with this action?',
        ],
    ],
];

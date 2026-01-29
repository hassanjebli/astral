<?php

return [
    // resource labels and fields
    'category' => [
        'sections' => [
            'general_information' => 'المعلومات العامة',
        ],
        'navigation' => [
            'label' => 'التصنيف',
            'model_label' => 'التصنيف',
            'model_label_plural' => 'التصنيفات',
        ],
        'fields' => [
            'name' => 'الاسم',
            'slug' => 'الرابط المختصر (Slug)',
            'parent_category' => 'التصنيف الأب',
            'sort' => 'ترتيب العرض',
            'is_active' => 'الحالة',
            'description' => 'الوصف',
            'created_at' => 'أنشئ في',
            'updated_at' => 'حدث في',
        ],
        'actions' => [
            'toggle_status' => 'تغيير الحالة',
        ],
    ],
    // common fields
    'created_at' => 'أنشئ في',
    'updated_at' => 'حدث في',

    // notifications
    'notifications' => [
        'success' => [
            'default_title' => 'نجاح',
            'default_body' => 'تمت العملية بنجاح.',
        ],
        'error' => [
            'default_title' => 'خطأ',
            'default_body' => 'حدث خطأ أثناء معالجة طلبك.',
        ],
        'warning' => [
            'default_title' => 'تنبيه',
            'default_body' => 'يرجى توخي الحذر أثناء القيام بهذا الإجراء.',
        ],
        'info' => [
            'default_title' => 'معلومات',
            'default_body' => 'إليك بعض المعلومات المهمة بخصوص هذا الإجراء.',
        ],
        'loading' => [
            'default_title' => 'جاري التحميل',
            'default_body' => 'طلبك قيد المعالجة، يرجى الانتظار...',
        ],
        'confirmation' => [
            'default_title' => 'يرجى التأكيد',
            'default_body' => 'هل أنت متأكد من رغبتك في الاستمرار؟',
        ],
    ],
];
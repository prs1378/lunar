<?php

return [

    'label' => 'گروه مشتری',

    'plural_label' => 'گروه‌های مشتری',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'دسته',
        ],
        'default' => [
            'label' => 'پیش‌فرض',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'دسته',
        ],
        'default' => [
            'label' => 'پیش‌فرض',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این گروه مشتری نمی‌تواند حذف شود زیرا مشتریان مرتبط وجود دارد.',
            ],
        ],
    ],
];

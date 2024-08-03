<?php

return [

    'label' => 'گروه ویژگی',

    'plural_label' => 'گروه های ویژگی',

    'table' => [
        'attributable_type' => [
            'label' => 'نوع',
        ],
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'موقعیت',
        ],
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'نوع',
        ],
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'وضعیت',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این گروه ویژگی را نمی توان حذف کرد زیرا ویژگی های مرتبط وجود دارد.',
            ],
        ],
    ],
];

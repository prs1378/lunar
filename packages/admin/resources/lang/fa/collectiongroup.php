<?php

return [

    'label' => 'گروه مجموعه',

    'plural_label' => 'گروههای مجموعه',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'collections_count' => [
            'label' => 'تعداد مجموعه ها',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این گروه مجموعه را نمی توان حذف کرد زیرا مجموعه هایی مرتبط هستند.',
            ],
        ],
    ],
];

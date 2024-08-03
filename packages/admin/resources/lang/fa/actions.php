<?php

return [
    'collections' => [
        'create_root' => [
            'label' => 'ایجاد مجموعه اصلی',
        ],
        'create_child' => [
            'label' => 'ایجاد مجموعه فرعی',
        ],
        'move' => [
            'label' => 'انتقال مجموعه',
        ],
        'delete' => [
            'label' => 'حذف',
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'بروزرسانی وضعیت',
            'wizard' => [
                'step_one' => [
                    'label' => 'وضعیت',
                ],
                'step_two' => [
                    'label' => 'Mailers & Notifications',
                    'no_mailers' => 'There are no mailers available for this status.',
                ],
                'step_three' => [
                    'label' => 'بازبینی و ذخیره',
                    'no_mailers' => 'No mailers have been chosen for preview.',
                ],
            ],
            'notification' => [
                'label' => 'Order status updated',
            ],
            'billing_email' => [
                'label' => 'ایمیل صورتحساب',
            ],
            'shipping_email' => [
                'label' => 'ایمیل حمل و نقل',
            ],
        ],

    ],
];

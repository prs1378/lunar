<?php

return [

    'label' => 'برند',

    'plural_label' => 'برندها',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'products_count' => [
            'label' => 'شماره محصولات',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این برند را نمی توان حذف کرد زیر محصولات مرتبط با آن وجود دارد',
            ],
        ],
    ],
    'pages' => [
        'products' => [
            'label' => 'محصولات',
            'actions' => [
                'attach' => [
                    'label' => 'مرتبط سازی محسولات',
                    'form' => [
                        'record_id' => [
                            'label' => 'محصول',
                        ],
                    ],
                    'notification' => [
                        'success' => 'محصول متصل به برند',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'محصول جدا شد.',
                    ],
                ],
            ],
        ],
        'collections' => [
            'label' => 'مجموعه ها',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'انتخاب مجموعه',
                        ],
                    ],
                ],
            ],
            'actions' => [
                'attach' => [
                    'label' => 'مرتبط سازی محصولات',
                ],
            ],
        ],
    ],

];

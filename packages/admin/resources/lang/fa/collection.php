<?php

return [

    'label' => 'مجموعه',

    'plural_label' => 'مجموعه ها',

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
    ],

    'pages' => [
        'children' => [
            'label' => 'مجموعه های فرعی',
            'actions' => [
                'create_child' => [
                    'label' => 'ایجاد مجموعه فرعی',
                ],
            ],
            'table' => [
                'children_count' => [
                    'label' => 'تعداد مجموعه ها',
                ],
                'name' => [
                    'label' => 'نام',
                ],
            ],
        ],
        'edit' => [
            'label' => 'اطلاعات اولیه',
        ],
        'products' => [
            'label' => 'محصولات',
            'actions' => [
                'attach' => [
                    'label' => 'ضمیمه محصول',
                ],
            ],
        ],
    ],

];

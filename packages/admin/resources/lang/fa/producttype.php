<?php

return [

    'label' => 'نوع محصول',

    'plural_label' => 'انواع محصول',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'products_count' => [
            'label' => 'تعداد محصولات',
        ],
        'product_attributes_count' => [
            'label' => 'ویژگی‌های محصول',
        ],
        'variant_attributes_count' => [
            'label' => 'ویژگی‌های تنوع',
        ],
    ],

    'tabs' => [
        'product_attributes' => [
            'label' => 'ویژگی‌های محصول',
        ],
        'variant_attributes' => [
            'label' => 'ویژگی‌های تنوع',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
    ],

    'attributes' => [
        'no_groups' => 'هیچ گروه ویژگی موجود نیست.',
        'no_attributes' => 'هیچ ویژگی موجود نیست.',
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'این نوع محصول نمی‌تواند حذف شود زیرا محصولات مرتبط وجود دارند.',
            ],
        ],
    ],

];

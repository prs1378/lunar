<?php

return [

    'label' => 'محصول',

    'plural_label' => 'محصولات',

    'status' => [
        'unpublished' => [
            'content' => 'در حال حاضر در وضعیت پیش‌نویس است، این محصول در تمامی کانال‌ها و گروه‌های مشتریان پنهان است.',
        ],
        'availability' => [
            'customer_groups' => 'این محصول در حال حاضر برای تمامی گروه‌های مشتریان در دسترس نیست.',
            'channels' => 'این محصول در حال حاضر برای تمامی کانال‌ها در دسترس نیست.',
        ],
    ],

    'table' => [
        'status' => [
            'label' => 'وضعیت',
            'states' => [
                'deleted' => 'حذف شده',
                'draft' => 'پیش‌نویس',
                'published' => 'منتشر شده',
            ],
        ],
        'name' => [
            'label' => 'نام',
        ],
        'brand' => [
            'label' => 'برند',
        ],
        'sku' => [
            'label' => 'شناسه محصول',
        ],
        'stock' => [
            'label' => 'موجودی',
        ],
        'producttype' => [
            'label' => 'نوع محصول',
        ],
    ],

    'actions' => [
        'edit_status' => [
            'label' => 'به‌روزرسانی وضعیت',
            'heading' => 'به‌روزرسانی وضعیت',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'brand' => [
            'label' => 'برند',
        ],
        'sku' => [
            'label' => 'شناسه محصول',
        ],
        'producttype' => [
            'label' => 'نوع محصول',
        ],
        'status' => [
            'label' => 'وضعیت',
            'options' => [
                'published' => [
                    'label' => 'منتشر شده',
                    'description' => 'این محصول در تمامی گروه‌های مشتریان و کانال‌های فعال در دسترس خواهد بود',
                ],
                'draft' => [
                    'label' => 'پیش‌نویس',
                    'description' => 'این محصول در تمامی کانال‌ها و گروه‌های مشتریان پنهان خواهد بود',
                ],
            ],
        ],
        'tags' => [
            'label' => 'برچسب‌ها',
        ],
        'collections' => [
            'label' => 'مجموعه‌ها',
        ],
    ],

    'pages' => [
        'availability' => [
            'label' => 'دسترس‌پذیری',
        ],
        'identifiers' => [
            'label' => 'شناسه‌های محصول',
        ],
        'inventory' => [
            'label' => 'موجودی',
        ],
        'pricing' => [
            'form' => [
                'tax_class_id' => [
                    'label' => 'کلاس مالیات',
                ],
                'tax_ref' => [
                    'label' => 'ارجاع مالیات',
                    'helper_text' => 'اختیاری، برای یکپارچگی با سیستم‌های شخص ثالث.',
                ],
            ],
        ],
        'shipping' => [
            'label' => 'حمل و نقل',
        ],
        'variants' => [
            'label' => 'تنوع‌ها',
        ],
        'collections' => [
            'label' => 'مجموعه‌ها',
        ],
        'associations' => [
            'label' => 'ارتباطات محصول',
        ],
    ],

];

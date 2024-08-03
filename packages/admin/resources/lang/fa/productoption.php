<?php

return [

    'label' => 'گزینه محصول',

    'plural_label' => 'گزینه‌های محصول',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'label' => [
            'label' => 'برچسب',
        ],
        'handle' => [
            'label' => 'شناسه',
        ],
        'shared' => [
            'label' => 'مشترک',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'label' => [
            'label' => 'برچسب',
        ],
        'handle' => [
            'label' => 'شناسه',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => 'تنوع محصولات ذخیره شد',
                    ],
                ],
            ],
            'actions' => [
                'cancel' => [
                    'label' => 'لغو',
                ],
                'save-options' => [
                    'label' => 'ذخیره گزینه‌ها',
                ],
                'add-shared-option' => [
                    'label' => 'اضافه کردن گزینه مشترک',
                    'form' => [
                        'product_option' => [
                            'label' => 'گزینه محصول',
                        ],
                        'no_shared_components' => [
                            'label' => 'گزینه‌های مشترکی وجود ندارد.',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => 'اضافه کردن گزینه',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading' => 'هیچ گزینه محصولی پیکربندی نشده است',
                    'description' => 'برای شروع تولید تنوع‌ها، یک گزینه مشترک یا محدود را اضافه کنید.',
                ],
            ],
            'options-table' => [
                'title' => 'گزینه‌های محصول',
                'configure-options' => [
                    'label' => 'پیکربندی گزینه‌ها',
                ],
                'table' => [
                    'option' => [
                        'label' => 'گزینه',
                    ],
                    'values' => [
                        'label' => 'مقدارها',
                    ],
                ],
            ],
            'variants-table' => [
                'title' => 'تنوع‌های محصول',
                'actions' => [
                    'create' => [
                        'label' => 'ایجاد تنوع',
                    ],
                    'edit' => [
                        'label' => 'ویرایش',
                    ],
                    'delete' => [
                        'label' => 'حذف',
                    ],
                ],
                'empty' => [
                    'heading' => 'هیچ تنوعی پیکربندی نشده است',
                ],
                'table' => [
                    'new' => [
                        'label' => 'جدید',
                    ],
                    'option' => [
                        'label' => 'گزینه',
                    ],
                    'sku' => [
                        'label' => 'شناسه محصول',
                    ],
                    'price' => [
                        'label' => 'قیمت',
                    ],
                    'stock' => [
                        'label' => 'موجودی',
                    ],
                ],
            ],
        ],
    ],

];

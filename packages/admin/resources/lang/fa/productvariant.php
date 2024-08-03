<?php

return [
    'label' => 'تنوع محصول',
    'plural_label' => 'تنوع‌های محصول',
    'pages' => [
        'edit' => [
            'title' => 'اطلاعات پایه',
        ],
        'media' => [
            'title' => 'رسانه',
            'form' => [
                'no_selection' => [
                    'label' => 'در حال حاضر تصویری برای این تنوع انتخاب نکرده‌اید.',
                ],
                'no_media_available' => [
                    'label' => 'در حال حاضر رسانه‌ای برای این محصول موجود نیست.',
                ],
                'images' => [
                    'label' => 'تصویر اصلی',
                    'helper_text' => 'تصویر محصولی را که این تنوع را نشان می‌دهد انتخاب کنید.',
                ],
            ],
        ],
        'identifiers' => [
            'title' => 'شناسه‌ها',
        ],
        'inventory' => [
            'title' => 'موجودی',
        ],
        'shipping' => [
            'title' => 'حمل و نقل',
        ],
    ],
    'form' => [
        'sku' => [
            'label' => 'کد کالا (SKU)',
        ],
        'gtin' => [
            'label' => 'شماره جهانی مورد معامله (GTIN)',
        ],
        'mpn' => [
            'label' => 'شماره قطعه سازنده (MPN)',
        ],
        'ean' => [
            'label' => 'UPC/EAN',
        ],
        'stock' => [
            'label' => 'موجودی',
        ],
        'backorder' => [
            'label' => 'در سفارش معوق',
        ],
        'purchasable' => [
            'label' => 'قابلیت خرید',
            'options' => [
                'always' => 'همیشه',
                'in_stock' => 'موجود',
                'in_stock_or_on_backorder' => 'موجود یا در سفارش معوق',
            ],
        ],
        'unit_quantity' => [
            'label' => 'مقدار واحد',
            'helper_text' => 'چند قلم مجزا یک واحد را تشکیل می‌دهند.',
        ],
        'min_quantity' => [
            'label' => 'حداقل مقدار',
            'helper_text' => 'حداقل مقدار تنوع محصول که می‌توان در یک خرید واحد خریداری کرد.',
        ],
        'quantity_increment' => [
            'label' => 'افزایش مقدار',
            'helper_text' => 'تنوع محصول باید در مضرب‌های این مقدار خریداری شود.',
        ],
        'tax_class_id' => [
            'label' => 'طبقه‌بندی مالیاتی',
        ],
        'shippable' => [
            'label' => 'قابل حمل',
        ],
        'length_value' => [
            'label' => 'طول',
        ],
        'length_unit' => [
            'label' => 'واحد طول',
        ],
        'width_value' => [
            'label' => 'عرض',
        ],
        'width_unit' => [
            'label' => 'واحد عرض',
        ],
        'height_value' => [
            'label' => 'ارتفاع',
        ],
        'height_unit' => [
            'label' => 'واحد ارتفاع',
        ],
        'weight_value' => [
            'label' => 'وزن',
        ],
        'weight_unit' => [
            'label' => 'واحد وزن',
        ],
    ],
];

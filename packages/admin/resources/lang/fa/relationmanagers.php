<?php

return [
    'customer_groups' => [
        'actions' => [
            'attach' => [
                'label' => 'اتصال گروه مشتری',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'نام',
            ],
            'enabled' => [
                'label' => 'فعال',
            ],
            'starts_at' => [
                'label' => 'تاریخ شروع',
            ],
            'ends_at' => [
                'label' => 'تاریخ پایان',
            ],
            'visible' => [
                'label' => 'قابل مشاهده',
            ],
            'purchasable' => [
                'label' => 'قابل خرید',
            ],
        ],
        'table' => [
            'description' => 'گروه‌های مشتری را به این محصول متصل کنید تا دسترسی به آن را تعیین کنید.',
            'name' => [
                'label' => 'نام',
            ],
            'enabled' => [
                'label' => 'فعال',
            ],
            'starts_at' => [
                'label' => 'تاریخ شروع',
            ],
            'ends_at' => [
                'label' => 'تاریخ پایان',
            ],
            'visible' => [
                'label' => 'قابل مشاهده',
            ],
            'purchasable' => [
                'label' => 'قابل خرید',
            ],
        ],
    ],
    'channels' => [
        'actions' => [
            'attach' => [
                'label' => 'برنامه‌ریزی کانال دیگر',
            ],
        ],
        'form' => [
            'enabled' => [
                'label' => 'فعال',
                'helper_text_false' => 'این کانال حتی اگر تاریخ شروع داشته باشد، فعال نخواهد بود.',
            ],
            'starts_at' => [
                'label' => 'تاریخ شروع',
                'helper_text' => 'برای دسترسی در هر تاریخی خالی بگذارید.',
            ],
            'ends_at' => [
                'label' => 'تاریخ پایان',
                'helper_text' => 'برای دسترسی نامحدود خالی بگذارید.',
            ],
        ],
        'table' => [
            'description' => 'تعیین کنید کدام کانال‌ها فعال هستند و زمان دسترسی را برنامه‌ریزی کنید.',
            'name' => [
                'label' => 'نام',
            ],
            'enabled' => [
                'label' => 'فعال',
            ],
            'starts_at' => [
                'label' => 'تاریخ شروع',
            ],
            'ends_at' => [
                'label' => 'تاریخ پایان',
            ],
        ],
    ],
    'medias' => [
        'title' => 'رسانه',
        'title_plural' => 'رسانه‌ها',
        'actions' => [
            'create' => [
                'label' => 'ایجاد رسانه',
            ],
            'view' => [
                'label' => 'مشاهده',
            ],
        ],
        'form' => [
            'name' => [
                'label' => 'نام',
            ],
            'media' => [
                'label' => 'تصویر',
            ],
            'primary' => [
                'label' => 'اولیه',
            ],
        ],
        'table' => [
            'image' => [
                'label' => 'تصویر',
            ],
            'file' => [
                'label' => 'فایل',
            ],
            'name' => [
                'label' => 'نام',
            ],
            'primary' => [
                'label' => 'اولیه',
            ],
        ],
    ],
    'urls' => [
        'title' => 'آدرس اینترنتی',
        'title_plural' => 'آدرس‌های اینترنتی',
        'actions' => [
            'create' => [
                'label' => 'ایجاد آدرس اینترنتی',
            ],
        ],
        'filters' => [
            'language_id' => [
                'label' => 'زبان',
            ],
        ],
        'form' => [
            'slug' => [
                'label' => 'نامک',
            ],
            'default' => [
                'label' => 'پیش‌فرض',
            ],
            'language' => [
                'label' => 'زبان',
            ],
        ],
        'table' => [
            'slug' => [
                'label' => 'نامک',
            ],
            'default' => [
                'label' => 'پیش‌فرض',
            ],
            'language' => [
                'label' => 'زبان',
            ],
        ],
    ],
    'customer_group_pricing' => [
        'title' => 'قیمت‌گذاری گروه مشتری',
        'title_plural' => 'قیمت‌گذاری گروه مشتری',
        'table' => [
            'heading' => 'قیمت‌گذاری گروه مشتری',
            'description' => 'اتصال قیمت به گروه‌های مشتری برای تعیین قیمت محصول.',
            'empty_state' => [
                'label' => 'هیچ قیمت‌گذاری گروه مشتری وجود ندارد.',
                'description' => 'برای شروع یک قیمت گروه مشتری ایجاد کنید.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'افزودن قیمت گروه مشتری',
                    'modal' => [
                        'heading' => 'ایجاد قیمت گروه مشتری',
                    ],
                ],
            ],
        ],
    ],
    'pricing' => [
        'title' => 'قیمت‌گذاری',
        'title_plural' => 'قیمت‌گذاری',
        'tab_name' => 'شکست‌های قیمت',
        'table' => [
            'heading' => 'شکست‌های قیمت',
            'description' => 'کاهش قیمت هنگامی که مشتری در مقادیر بیشتری خریداری می‌کند.',
            'empty_state' => [
                'label' => 'هیچ شکست قیمتی وجود ندارد.',
            ],
            'actions' => [
                'create' => [
                    'label' => 'افزودن شکست قیمت',
                ],
            ],
            'price' => [
                'label' => 'قیمت',
            ],
            'customer_group' => [
                'label' => 'گروه مشتری',
                'placeholder' => 'تمام گروه‌های مشتری',
            ],
            'min_quantity' => [
                'label' => 'حداقل مقدار',
            ],
            'currency' => [
                'label' => 'واحد پول',
            ],
        ],
        'form' => [
            'price' => [
                'label' => 'قیمت',
                'helper_text' => 'قیمت خرید، قبل از تخفیف‌ها.',
            ],
            'customer_group_id' => [
                'label' => 'گروه مشتری',
                'placeholder' => 'تمام گروه‌های مشتری',
                'helper_text' => 'گروه مشتری را انتخاب کنید که این قیمت به آن اعمال شود.',
            ],
            'min_quantity' => [
                'label' => 'حداقل مقدار',
                'helper_text' => 'حداقل مقداری که این قیمت برای آن در دسترس خواهد بود را انتخاب کنید.',
                'validation' => [
                    'unique' => 'گروه مشتری و حداقل مقدار باید منحصر به فرد باشد.',
                ],
            ],
            'currency_id' => [
                'label' => 'واحد پول',
                'helper_text' => 'واحد پول را برای این قیمت انتخاب کنید.',
            ],
            'compare_price' => [
                'label' => 'قیمت مقایسه‌ای',
                'helper_text' => 'قیمت اصلی یا RRP، برای مقایسه با قیمت خرید آن.',
            ],
            'basePrices' => [
                'title' => 'قیمت‌ها',
                'form' => [
                    'price' => [
                        'label' => 'قیمت',
                        'helper_text' => 'قیمت خرید، قبل از تخفیف‌ها.',
                    ],
                    'compare_price' => [
                        'label' => 'قیمت مقایسه‌ای',
                        'helper_text' => 'قیمت اصلی یا RRP، برای مقایسه با قیمت خرید آن.',
                    ],
                ],
                'tooltip' => 'به صورت خودکار بر اساس نرخ‌های ارز تولید می‌شود.',
            ],
        ],
    ],
];

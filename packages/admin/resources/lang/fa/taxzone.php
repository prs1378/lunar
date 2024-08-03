<?php

return [

    'label' => 'منطقه مالیاتی',

    'plural_label' => 'مناطق مالیاتی',

    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'zone_type' => [
            'label' => 'نوع منطقه',
        ],
        'active' => [
            'label' => 'فعال',
        ],
        'default' => [
            'label' => 'پیش‌فرض',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'نام',
        ],
        'zone_type' => [
            'label' => 'نوع منطقه',
            'options' => [
                'country' => 'محدود به کشورها',
                'states' => 'محدود به ایالت‌ها',
                'postcodes' => 'محدود به کدهای پستی',
            ],
        ],
        'price_display' => [
            'label' => 'نمایش قیمت',
            'options' => [
                'include_tax' => 'شامل مالیات',
                'exclude_tax' => 'بدون مالیات',
            ],
        ],
        'active' => [
            'label' => 'فعال',
        ],
        'default' => [
            'label' => 'پیش‌فرض',
        ],

        'zone_countries' => [
            'label' => 'کشورها',
        ],

        'zone_country' => [
            'label' => 'کشور',
        ],

        'zone_states' => [
            'label' => 'ایالت‌ها',
        ],

        'zone_postcodes' => [
            'label' => 'کدهای پستی',
            'helper' => 'هر کد پستی را در یک خط جدید وارد کنید. از الگوهایی مانند NW* پشتیبانی می‌کند',
        ],

    ],

];

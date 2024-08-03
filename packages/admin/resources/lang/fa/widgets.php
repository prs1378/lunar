<?php

return [
    'dashboard' => [
        'orders' => [
            'order_stats_overview' => [
                'stat_one' => [
                    'label' => 'سفارشات امروز',
                    'increase' => ':percentage% افزایش نسبت به :count دیروز',
                    'decrease' => ':percentage% کاهش نسبت به :count دیروز',
                    'neutral' => 'بدون تغییر نسبت به دیروز',
                ],
                'stat_two' => [
                    'label' => 'سفارشات ۷ روز گذشته',
                    'increase' => ':percentage% افزایش نسبت به :count دوره قبل',
                    'decrease' => ':percentage% کاهش نسبت به :count دوره قبل',
                    'neutral' => 'بدون تغییر نسبت به دوره قبل',
                ],
                'stat_three' => [
                    'label' => 'سفارشات ۳۰ روز گذشته',
                    'increase' => ':percentage% افزایش نسبت به :count دوره قبل',
                    'decrease' => ':percentage% کاهش نسبت به :count دوره قبل',
                    'neutral' => 'بدون تغییر نسبت به دوره قبل',
                ],
                'stat_four' => [
                    'label' => 'فروش امروز',
                    'increase' => ':percentage% افزایش نسبت به :total دیروز',
                    'decrease' => ':percentage% کاهش نسبت به :total دیروز',
                    'neutral' => 'بدون تغییر نسبت به دیروز',
                ],
                'stat_five' => [
                    'label' => 'فروش ۷ روز گذشته',
                    'increase' => ':percentage% افزایش نسبت به :total دوره قبل',
                    'decrease' => ':percentage% کاهش نسبت به :total دوره قبل',
                    'neutral' => 'بدون تغییر نسبت به دوره قبل',
                ],
                'stat_six' => [
                    'label' => 'فروش ۳۰ روز گذشته',
                    'increase' => ':percentage% افزایش نسبت به :total دوره قبل',
                    'decrease' => ':percentage% کاهش نسبت به :total دوره قبل',
                    'neutral' => 'بدون تغییر نسبت به دوره قبل',
                ],
            ],
            'order_totals_chart' => [
                'heading' => 'مجموع سفارشات در سال گذشته',
                'series_one' => [
                    'label' => 'این دوره',
                ],
                'series_two' => [
                    'label' => 'دوره قبلی',
                ],
                'yaxis' => [
                    'label' => 'گردش مالی :currency',
                ],
            ],
            'order_sales_chart' => [
                'heading' => 'گزارش سفارشات / فروش',
                'series_one' => [
                    'label' => 'سفارشات',
                ],
                'series_two' => [
                    'label' => 'درآمد',
                ],
                'yaxis' => [
                    'series_one' => [
                        'label' => '# سفارشات',
                    ],
                    'series_two' => [
                        'label' => 'مجموع ارزش',
                    ],
                ],
            ],
            'average_order_value' => [
                'heading' => 'میانگین ارزش سفارش',
            ],
            'new_returning_customers' => [
                'heading' => 'مشتریان جدید در مقابل بازگشتی',
                'series_one' => [
                    'label' => 'مشتریان جدید',
                ],
                'series_two' => [
                    'label' => 'مشتریان بازگشتی',
                ],
            ],
            'popular_products' => [
                'heading' => 'پرفروش‌های این ماه',
                'description' => 'این ارقام بر اساس تعداد دفعاتی است که یک محصول در سفارش‌ها ظاهر می‌شود، نه تعداد سفارش داده شده.',
            ],
            'latest_orders' => [
                'heading' => 'آخرین سفارشات',
            ],
        ],
    ],
    'customer' => [
        'stats_overview' => [
            'total_orders' => [
                'label' => 'مجموع سفارشات',
            ],
            'avg_spend' => [
                'label' => 'میانگین هزینه',
            ],
            'total_spend' => [
                'label' => 'مجموع هزینه',
            ],
        ],
    ],
    'variant_switcher' => [
        'label' => 'تغییر نوع',
        'table' => [
            'sku' => [
                'label' => 'شناسه کالا',
            ],
            'values' => [
                'label' => 'مقادیر',
            ],
        ],
    ],
];

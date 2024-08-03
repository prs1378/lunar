<?php

return [
    'plural_label' => 'تخفیف‌ها',
    'label' => 'تخفیف',
    'form' => [
        'conditions' => [
            'heading' => 'شرایط',
        ],
        'buy_x_get_y' => [
            'heading' => 'خرید X دریافت Y',
        ],
        'amount_off' => [
            'heading' => 'مقدار تخفیف',
        ],
        'name' => [
            'label' => 'نام',
        ],
        'handle' => [
            'label' => 'دسته',
        ],
        'starts_at' => [
            'label' => 'تاریخ شروع',
        ],
        'ends_at' => [
            'label' => 'تاریخ پایان',
        ],
        'priority' => [
            'label' => 'اولویت',
            'helper_text' => 'تخفیف‌های با اولویت بالاتر ابتدا اعمال خواهند شد.',
            'options' => [
                'low' => [
                    'label' => 'کم',
                ],
                'medium' => [
                    'label' => 'متوسط',
                ],
                'high' => [
                    'label' => 'بالا',
                ],
            ],
        ],
        'stop' => [
            'label' => 'توقف سایر تخفیف‌ها بعد از این تخفیف',
        ],
        'coupon' => [
            'label' => 'کوپن',
            'helper_text' => 'کوپنی که برای اعمال تخفیف نیاز است وارد کنید، اگر خالی بگذارید به‌طور خودکار اعمال می‌شود.',
        ],
        'max_uses' => [
            'label' => 'حداکثر استفاده‌ها',
            'helper_text' => 'برای استفاده نامحدود خالی بگذارید.',
        ],
        'max_uses_per_user' => [
            'label' => 'حداکثر استفاده‌ها برای هر کاربر',
            'helper_text' => 'برای استفاده نامحدود خالی بگذارید.',
        ],
        'minimum_cart_amount' => [
            'label' => 'حداقل مبلغ سبد خرید',
        ],
        'min_qty' => [
            'label' => 'تعداد محصول',
            'helper_text' => 'تعداد محصولات واجد شرایط مورد نیاز برای اعمال تخفیف را تنظیم کنید.',
        ],
        'reward_qty' => [
            'label' => 'تعداد اقلام رایگان',
            'helper_text' => 'تعداد هر موردی که تخفیف دارد.',
        ],
        'max_reward_qty' => [
            'label' => 'حداکثر تعداد پاداش',
            'helper_text' => 'حداکثر تعداد محصولاتی که می‌توانند تخفیف داشته باشند، صرف‌نظر از معیارها.',
        ],
        'automatic_rewards' => [
            'label' => 'افزودن خودکار پاداش‌ها',
            'helper_text' => 'برای افزودن محصولات پاداش هنگامی که در سبد خرید وجود ندارد، فعال کنید.',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'نام',
        ],
        'status' => [
            'label' => 'وضعیت',
            \Lunar\Models\Discount::ACTIVE => [
                'label' => 'فعال',
            ],
            \Lunar\Models\Discount::PENDING => [
                'label' => 'منتظر',
            ],
            \Lunar\Models\Discount::EXPIRED => [
                'label' => 'منقضی شده',
            ],
            \Lunar\Models\Discount::SCHEDULED => [
                'label' => 'برنامه‌ریزی شده',
            ],
        ],
        'type' => [
            'label' => 'نوع',
        ],
        'starts_at' => [
            'label' => 'تاریخ شروع',
        ],
        'ends_at' => [
            'label' => 'تاریخ پایان',
        ],
    ],
    'pages' => [
        'availability' => [
            'label' => 'دسترس‌پذیری',
        ],
        'limitations' => [
            'label' => 'محدودیت‌ها',
        ],
    ],
    'relationmanagers' => [
        'collections' => [
            'title' => 'مجموعه‌ها',
            'description' => 'انتخاب کنید که این تخفیف به کدام مجموعه‌ها محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => 'پیوست کردن مجموعه',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثنا',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثنا',
                        ],
                    ],
                ],
            ],
        ],
        'brands' => [
            'title' => 'مارک‌ها',
            'description' => 'انتخاب کنید که این تخفیف به کدام مارک‌ها محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => 'پیوست کردن مارک',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثنا',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثنا',
                        ],
                    ],
                ],
            ],
        ],
        'products' => [
            'title' => 'محصولات',
            'description' => 'انتخاب کنید که این تخفیف به کدام محصولات محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => 'افزودن محصول',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثنا',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثنا',
                        ],
                    ],
                ],
            ],
        ],
        'rewards' => [
            'title' => 'پاداش‌های محصول',
            'description' => 'انتخاب کنید که کدام محصولات در صورت وجود در سبد خرید و برآورده شدن شرایط بالا، تخفیف خواهند گرفت.',
            'actions' => [
                'attach' => [
                    'label' => 'افزودن محصول',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثنا',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثنا',
                        ],
                    ],
                ],
            ],
        ],
        'conditions' => [
            'title' => 'شرایط محصول',
            'description' => 'انتخاب کنید که کدام محصولات برای اعمال تخفیف لازم است.',
            'actions' => [
                'attach' => [
                    'label' => 'افزودن محصول',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'type' => [
                    'label' => 'نوع',
                    'limitation' => [
                        'label' => 'محدودیت',
                    ],
                    'exclusion' => [
                        'label' => 'استثنا',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثنا',
                        ],
                    ],
                ],
            ],
        ],
        'productvariants' => [
            'title' => 'متغیرهای محصول',
            'description' => 'انتخاب کنید که این تخفیف به کدام متغیرهای محصول محدود شود.',
            'actions' => [
                'attach' => [
                    'label' => '

افزودن متغیر محصول',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'نام',
                ],
                'sku' => [
                    'label' => 'کد SKU',
                ],
                'values' => [
                    'label' => 'گزینه(ها)',
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'محدودیت',
                        ],
                        'exclusion' => [
                            'label' => 'استثنا',
                        ],
                    ],
                ],
            ],
        ],
    ],
];

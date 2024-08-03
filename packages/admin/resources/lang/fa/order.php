<?php

return [

    'label' => 'سفارش',

    'plural_label' => 'سفارشات',

    'breadcrumb' => [
        'manage' => 'مدیریت',
    ],

    'transactions' => [
        'capture' => 'ثبت شده',
        'intent' => 'قصد',
        'refund' => 'بازپرداخت شده',
        'failed' => 'ناموفق',
    ],

    'table' => [
        'status' => [
            'label' => 'وضعیت',
        ],
        'reference' => [
            'label' => 'ارجاع',
        ],
        'customer_reference' => [
            'label' => 'ارجاع مشتری',
        ],
        'customer' => [
            'label' => 'مشتری',
        ],
        'tags' => [
            'label' => 'برچسب‌ها',
        ],
        'postcode' => [
            'label' => 'کد پستی',
        ],
        'email' => [
            'label' => 'ایمیل',
            'copy_message' => 'آدرس ایمیل کپی شد',
        ],
        'phone' => [
            'label' => 'تلفن',
        ],
        'total' => [
            'label' => 'مجموع',
        ],
        'date' => [
            'label' => 'تاریخ',
        ],
        'new_customer' => [
            'label' => 'نوع مشتری',
        ],
        'placed_after' => [
            'label' => 'تاریخ ثبت پس از',
        ],
        'placed_before' => [
            'label' => 'تاریخ ثبت قبل از',
        ],
    ],

    'form' => [
        'address' => [
            'first_name' => [
                'label' => 'نام',
            ],
            'last_name' => [
                'label' => 'نام خانوادگی',
            ],
            'line_one' => [
                'label' => 'آدرس خط 1',
            ],
            'line_two' => [
                'label' => 'آدرس خط 2',
            ],
            'line_three' => [
                'label' => 'آدرس خط 3',
            ],
            'company_name' => [
                'label' => 'نام شرکت',
            ],
            'contact_phone' => [
                'label' => 'تلفن',
            ],
            'contact_email' => [
                'label' => 'آدرس ایمیل',
            ],
            'city' => [
                'label' => 'شهر',
            ],
            'state' => [
                'label' => 'استان / منطقه',
            ],
            'postcode' => [
                'label' => 'کد پستی',
            ],
            'country_id' => [
                'label' => 'کشور',
            ],
        ],

        'reference' => [
            'label' => 'ارجاع',
        ],
        'status' => [
            'label' => 'وضعیت',
        ],
        'transaction' => [
            'label' => 'تراکنش',
        ],
        'amount' => [
            'label' => 'مقدار',
            'hint' => [
                'less_than_total' => "شما در حال ثبت مقداری کمتر از کل مبلغ تراکنش هستید",
            ],
        ],

        'notes' => [
            'label' => 'یادداشت‌ها',
        ],
        'confirm' => [
            'label' => 'تأیید',
            'alert' => 'تأیید مورد نیاز است',
            'hint' => [
                'capture' => 'لطفاً تأیید کنید که می‌خواهید این پرداخت را ثبت کنید',
                'refund' => 'لطفاً تأیید کنید که مایل به بازپرداخت این مقدار هستید.',
            ],
        ],
    ],

    'infolist' => [
        'notes' => [
            'label' => 'یادداشت‌ها',
            'placeholder' => 'یادداشتی برای این سفارش وجود ندارد',
        ],
        'delivery_instructions' => [
            'label' => 'دستورات تحویل',
        ],
        'shipping_total' => [
            'label' => 'مجموع حمل و نقل',
        ],
        'paid' => [
            'label' => 'پرداخت شده',
        ],
        'refund' => [
            'label' => 'بازپرداخت',
        ],
        'unit_price' => [
            'label' => 'قیمت واحد',
        ],
        'quantity' => [
            'label' => 'تعداد',
        ],
        'sub_total' => [
            'label' => 'زیرمجموعه',
        ],
        'discount_total' => [
            'label' => 'مجموع تخفیف',
        ],
        'total' => [
            'label' => 'مجموع',
        ],
        'current_stock_level' => [
            'message' => 'سطح موجودی کنونی: :count',
        ],
        'purchase_stock_level' => [
            'message' => 'در زمان سفارش: :count',
        ],
        'status' => [
            'label' => 'وضعیت',
        ],
        'reference' => [
            'label' => 'ارجاع',
        ],
        'customer_reference' => [
            'label' => 'ارجاع مشتری',
        ],
        'channel' => [
            'label' => 'کانال',
        ],
        'date_created' => [
            'label' => 'تاریخ ایجاد',
        ],
        'date_placed' => [
            'label' => 'تاریخ ثبت',
        ],
        'new_returning' => [
            'label' => 'جدید / بازگشتی',
        ],
        'new_customer' => [
            'label' => 'مشتری جدید',
        ],
        'returning_customer' => [
            'label' => 'مشتری بازگشتی',
        ],
        'shipping_address' => [
            'label' => 'آدرس ارسال',
        ],
        'billing_address' => [
            'label' => 'آدرس صورتحساب',
        ],
        'address_not_set' => [
            'label' => 'آدرس تنظیم نشده است',
        ],
        'billing_matches_shipping' => [
            'label' => 'همانند آدرس ارسال',
        ],
        'additional_info' => [
            'label' => 'اطلاعات اضافی',
        ],
        'no_additional_info' => [
            'label' => 'هیچ اطلاعات اضافی وجود ندارد',
        ],
        'tags' => [
            'label' => 'برچسب‌ها',
        ],
        'timeline' => [
            'label' => 'جدول زمانی',
        ],
        'transactions' => [
            'label' => 'تراکنش‌ها',
            'placeholder' => 'بدون تراکنش',
        ],
        'alert' => [
            'requires_capture' => 'این سفارش هنوز نیاز به ثبت پرداخت دارد.',
            'partially_refunded' => 'این سفارش به طور جزئی بازپرداخت شده است.',
            'refunded' => 'این سفارش بازپرداخت شده است.',
        ],
    ],

    'action' => [
        'bulk_update_status' => [
            'label' => 'به‌روزرسانی وضعیت',
            'notification' => 'وضعیت سفارشات به‌روزرسانی شد',
        ],
        'update_status' => [
            'new_status' => [
                'label' => 'وضعیت جدید',
            ],
            'additional_content' => [
                'label' => 'محتوای اضافی',
            ],
            'additional_email_recipient' => [
                'label' => 'گیرنده ایمیل اضافی',
                'placeholder' => 'اختیاری',
            ],
        ],
        'download_order_pdf' => [
            'label' => 'دانلود PDF',
            'notification' => 'در حال دانلود PDF سفارش',
        ],
        'edit_address' => [
            'label' => 'ویرایش',
            'notification' => [
                'error' => 'خطا',
                'billing_address' => [
                    'saved' => 'آدرس صورتحساب ذخیره شد',
                ],
                'shipping_address' => [
                    'saved' => 'آدرس ارسال ذخیره شد',
                ],
            ],
        ],
        'edit_tags' => [
            'label' => 'ویرایش',
        ],
        'capture_payment' => [
            'label' => 'ثبت پرداخت',
            'notification' => [
                'error' => 'مشکلی در ثبت وجود دارد',
                'success' => 'ثبت موفقیت‌آمیز',
            ],
        ],
        'refund_payment' => [
            'label' => 'بازپرداخت',
            'notification' => [
                'error' => 'مشکلی در بازپرداخت وجود دارد',
                'success' => 'بازپرداخت موفقیت‌آمیز',
            ],
        ],
    ],

];


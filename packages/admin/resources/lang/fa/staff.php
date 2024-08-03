<?php

return [

    'label' => 'پرسنل',

    'plural_label' => 'پرسنل',

    'table' => [
        'firstname' => [
            'label' => 'نام',
        ],
        'lastname' => [
            'label' => 'نام خانوادگی',
        ],
        'email' => [
            'label' => 'ایمیل',
        ],
        'admin' => [
            'badge' => 'مدیر کل',
        ],
    ],

    'form' => [
        'firstname' => [
            'label' => 'نام',
        ],
        'lastname' => [
            'label' => 'نام خانوادگی',
        ],
        'email' => [
            'label' => 'ایمیل',
        ],
        'password' => [
            'label' => 'رمز عبور',
            'hint' => 'بازنشانی رمز عبور',
        ],
        'admin' => [
            'label' => 'مدیر کل',
            'helper' => 'نقش مدیر کل قابل تغییر در مرکز نیست.',
        ],
        'roles' => [
            'label' => 'نقش‌ها',
            'helper' => ':roles دسترسی کامل دارند',
        ],
        'permissions' => [
            'label' => 'دسترسی‌ها',
        ],
        'role' => [
            'label' => 'نام نقش',
        ],
    ],

    'action' => [
        'acl' => [
            'label' => 'کنترل دسترسی',
        ],
        'add-role' => [
            'label' => 'اضافه کردن نقش',
        ],
        'delete-role' => [
            'label' => 'حذف نقش',
            'heading' => 'حذف نقش: :role',
        ],
    ],

    'acl' => [
        'title' => 'کنترل دسترسی',
        'tooltip' => [
            'roles-included' => 'دسترسی در نقش‌های زیر موجود است',
        ],
        'notification' => [
            'updated' => 'به‌روزرسانی شد',
            'error' => 'خطا',
            'no-role' => 'نقش در سیستم ثبت نشده است',
            'no-permission' => 'دسترسی در سیستم ثبت نشده است',
            'no-role-permission' => 'نقش و دسترسی در سیستم ثبت نشده‌اند',
        ],
    ],

];

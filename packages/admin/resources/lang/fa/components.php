<?php

return [
    'tags' => [
        'notification' => [

            'updated' => 'برچسب ها به روز شد',

        ],
    ],

    'activity-log' => [

        'input' => [

            'placeholder' => 'افزودن نظر',

        ],

        'action' => [

            'add-comment' => 'افزودن نظر',

        ],

        'system' => 'سیستم',

        'partials' => [
            'orders' => [
                'order_created' => 'سفارش ایجاد شد',

                'status_change' => 'وضعیت ها بروزرسانی شدند',

                'capture' => 'Payment of :amount on card ending :last_four',

                'authorized' => 'Authorized of :amount on card ending :last_four',

                'refund' => 'Refund of :amount on card ending :last_four',

                'address' => ':type بروزرسانی شد',

                'billingAddress' => 'آدرس صورتحساب',

                'shippingAddress' => 'آدرس حمل ',
            ],

            'update' => [
                'updated' => ':model بروزرسانی شد',
            ],

            'create' => [
                'created' => ':model ایجاد شد',
            ],

            'tags' => [
                'updated' => 'برچسب ها بروزرسانی شدند',
                'added' => 'افزوده شد',
                'removed' => 'حذف شد',
            ],
        ],

        'notification' => [
            'comment_added' => 'نظر افزوده شد',
        ],

    ],

    'forms' => [
        'youtube' => [
            'helperText' => 'Enter the ID of the YouTube video. e.g. dQw4w9WgXcQ',
        ],
    ],

    'collection-tree-view' => [
        'actions' => [
            'move' => [
                'form' => [
                    'target_id' => [
                        'label' => 'Parent Collection',
                    ],
                ],
            ],
        ],
        'notifications' => [
            'collections-reordered' => [
                'success' => 'Collections Reordered',
            ],
            'node-expanded' => [
                'danger' => 'Unable to load collections',
            ],
            'delete' => [
                'danger' => 'Unable to delete collection',
            ],
        ],
    ],

    'product-options-list' => [
        'add-option' => [
            'label' => 'Add Option',
        ],
        'delete-option' => [
            'label' => 'Delete Option',
        ],
        'remove-shared-option' => [
            'label' => 'Remove Shared Option',
        ],
        'add-value' => [
            'label' => 'Add Another Value',
        ],
        'name' => [
            'label' => 'Name',
        ],
        'values' => [
            'label' => 'Values',
        ],
    ],
];

<?php

return [
    'modules' => [
        "aiassistance_max_token",
        "connector_module",
        "crm_module",
        "essentials_module",
        "manufacturing_module",
        "productcatalogue_module",
        "project_module",
        "repair_module",
        "spreadsheet_module",
        "woocommerce_module",
    ],
    'theme_colors' => [
        'blue' => 'Blue',
        'black' => 'Black',
        'purple' => 'Purple',
        'green' => 'Green',
        'red' => 'Red',
        'yellow' => 'Yellow',
        'blue-light' => 'Blue Light',
        'black-light' => 'Black Light',
        'purple-light' => 'Purple Light',
        'green-light' => 'Green Light',
        'red-light' => 'Red Light',
    ],
    'mailDrivers' => [
        'smtp' => 'SMTP',
        // 'sendmail' => 'Sendmail',
        // 'mailgun' => 'Mailgun',
        // 'mandrill' => 'Mandrill',
        // 'ses' => 'SES',
        // 'sparkpost' => 'Sparkpost'
    ],
    'date_formates' => [
        'd-m-Y' => 'dd-mm-yyyy',
        'm-d-Y' => 'mm-dd-yyyy',
        'd/m/Y' => 'dd/mm/yyyy',
        'm/d/Y' => 'mm/dd/yyyy',
    ],

    'business' => [
        'enabled_modules' => [
            'purchases',
            'add_sale',
            'pos_sale',
            'stock_transfers',
            'stock_adjustment',
            'expenses'
        ],
        'keyboard_shortcuts' => '{"pos":{"express_checkout":"shift+e","pay_n_ckeckout":"shift+p","draft":"shift+d","cancel":"shift+c","edit_discount":"shift+i","edit_order_tax":"shift+t","add_payment_row":"shift+r","finalize_payment":"shift+f","recent_product_quantity":"f2","add_new_product":"f4"}}',
        'ref_no_prefixes' => [
            'purchase' => 'PO',
            'stock_transfer' => 'ST',
            'stock_adjustment' => 'SA',
            'sell_return' => 'CN',
            'expense' => 'EP',
            'contacts' => 'CO',
            'purchase_payment' => 'PP',
            'sell_payment' => 'SP',
            'business_location' => 'BL',
        ],
        'roles' => [
            'cashier' => [
                'sell.view',
                'sell.create',
                'sell.update',
                'sell.delete',
                'access_all_locations',
                'view_cash_register',
                'close_cash_register'
            ]
        ],
        'default_pos_settings' => ['disable_pay_checkout' => 0, 'disable_draft' => 0, 'disable_express_checkout' => 0, 'hide_product_suggestion' => 0, 'hide_recent_trans' => 0, 'disable_discount' => 0, 'disable_order_tax' => 0, 'is_pos_subtotal_editable' => 0],
        'default_email_settings' => ['mail_host' => '', 'mail_port' => '', 'mail_username' => '', 'mail_password' => '', 'mail_encryption' => '', 'mail_from_address' => '', 'mail_from_name' => ''],
    ]
];

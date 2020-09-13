<?php

return [

    'name'             => 'Snapovia ',
    'meta_name'        => '',
    'meta_description' => '',

    //Promo/Deal for the shop
    'deal'             => [
        'live'  => true,
        'title' => '⚡️ Happy Holiday Deals on Everything ⚡️'
    ],


    // Store Information
    'store'            => [
        'currency'  => 'usd',
        'address'   => 'St. Street',
        'city'      => 'Adelate',
        'postcode'  => '12345',
        'state'     => 'New Arizona',
        'Country'   => 'Uruguay',
        'telephone' => '(203)27 384 867'
    ],


    //Catalog
    'catalog'          => [
        //Front Area
        'product_price'          => 'exclude_tax', //'exclude_tax','include_tax'
        'display_out_of_stock'   => true,
        'manage_inventory'       => true,

        //Admin area
        'product_grid_per_page'  => 20,
        'category_grid_per_page' => 20,
    ],


    // Sales Information
    'sales'            => [
        'tax'                      => '12.5',
        'shipping_inclue_tax'      => true,
        'apply_tax_on'             => 'sub_total',//'grand_total','sub_total'
        'apply_tax_after_discount' => true,

    ],

    //Customer Section
    'customer'         => [
        'prefix'       => false,
        'postfix'      => false,
        'middle_name'  => false,
        'company_name' => false,
        'vat_id'       => false,
        'dob'          => true,
        'country'      => true
    ],

    //Vendor Section
    'vendor'           => [
        'enable'                          => true,
        'enable_login'                    => false,
        'enable_registration'             => false,
        'registration_approval_required'  => true,
        'order_confirm_approval_required' => true,
    ],

    // Checkout
    'checkout'         => [

    ],

    //Admin
    'admin'            => [
        'email'                 => 'bappa2du@gmail.com',
        'password_update'       => 'recommended',//'recommended','force'
        'password_update_cycle' => '30',//in days, 0 for disable
        'customer_notification' => true,
        'order_notification'    => true,
    ],

    //Development
    'dev'              => [
        'show_debug_tool' => env('APP_DEBUG', false),
    ],
];

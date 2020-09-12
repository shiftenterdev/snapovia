<?php

return [


    'name'             => 'Snapovia ',
    'meta_name'        => '',
    'meta_description' => '',

    'deal'     => [
        'live'  => true,
        'title' => '⚡️ Happy Holiday Deals on Everything ⚡️'
    ],


    // Store Information
    'store'    => [
        'address'   => 'St. Street',
        'city'      => 'Adelate',
        'postcode'  => '12345',
        'state'     => 'New Arizona',
        'Country'   => 'Uruguay',
        'telephone' => '(203)27 384 867'
    ],


    //Catalog
    'catalog'  => [
        //Front Area
        'product_price'          => 'exclude_tax', //'exclude_tax','include_tax'
        'display_out_of_stock'   => true,
        'manage_inventory'       => true,

        //Admin area
        'product_grid_per_page'  => 20,
        'category_grid_per_page' => 20,
    ],


    // Sales Information
    'sales'    => [
        'tax'                      => '12.5',
        'shipping_inclue_tax'      => true,
        'apply_tax_on'             => 'sub_total',//'grand_total','sub_total'
        'apply_tax_after_discount' => true,

    ],

    //Customer Section
    'customer' => [
        'prefix'       => false,
        'postfix'      => false,
        'middle_name'  => false,
        'company_name' => false,
        'vat_id'       => false,
        'dob'          => true,
        'country'      => true
    ],

    // Checkout
    'checkout' => [

    ],

    //Development
    'dev'      => [
        'show_debug_tool' => env('APP_DEBUG',false),
    ],
];

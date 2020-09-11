<?php

return [


    'name'             => 'Snapovia ',
    'meta_name'        => '',
    'meta_description' => '',


    // Store Information
    'store'            => [
        'address'   => 'St. Street',
        'city'      => 'Adelate',
        'postcode'  => '12345',
        'state'     => 'New Arizona',
        'Country'   => 'Uruguay',
        'telephone' => '(203)27 384 867'
    ],


    //Catalog
    'catalog'          => [
        'product_price' => 'exclude_tax', //'exclude_tax','include_tax'
    ],


    // Sales Information
    'sales'            => [
        'tax'                 => '12.5',
        'shipping_inclue_tax' => true,
        'apply_tax_on'        => 'sub_total',//'grand_total','sub_total'

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

    // Checkout
    'checkout'         => [

    ],

    //Development
    'dev'              => [

    ],
];

<?php

return [

    //-------------------------------
    // Timezone for insert dates in database
    // If you want Gateway not set timezone, just leave it empty
    //--------------------------------
    'timezone' => 'Asia/Tehran',



    //--------------------------------
    // Sadad gateway
    //--------------------------------

    'saman' => [
        'merchant'     => '',
        'password'     => '',
        'callback-url'   => '/',
    ],

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal' => [
        'merchant-id'  => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
        'type'         => 'zarin-gate',             // Types: [zarin-gate || normal]
        'callback-url' => '/',
        'server'       => 'germany',                // Servers: [germany || iran || test]
        'email'        => 'email@gmail.com',
        'mobile'       => '09xxxxxxxxx',
        'description'  => 'description',
    ],
    //--------------------------------
    // Paypal gateway
    //--------------------------------

    //-------------------------------
    // Tables names
    //--------------------------------
    'table'    => 'gateway_transactions',
];

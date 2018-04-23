<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripeTest' => [
        'model' => App\User::class,
        'key' => env('pk_test_bC4fwLOsJOPNerzh2wQz8KGN'),
        'secret' => env('sk_test_WD6L6ppMCUxBr95NZY3jxvtx'),
    ],
    
    'SquareAppId' => 'sq0idp-KwOHqv6HnFDFL7RZTStjDQ',
    'SquareSecret' => 'sq0atp-_iMBe9GqZTMOsjGu_Nbn5w',
    'test' => 'myTest123'
];

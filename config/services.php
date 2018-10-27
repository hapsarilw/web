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
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'firebase' => [
        'api_key' => 'AIzaSyCTLQLC7wzcz5dEKz_BQQAY-ar6M8tQ6IQ',
        'auth_domain' => 'fly-n-buy.firebaseapp.com',
        'database_url' => 'https://fly-n-buy.firebaseio.com',
        'secret' => '9zEZI8qz5KIntOecUcskF1A1NAnUwxCJrDY62XYx',
        'storage_bucket' => 'fly-n-buy.appspot.com',
    ],

];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '526535296851-37arsuhc8h3vfiakkve5i0j3idejs9fl.apps.googleusercontent.com',
        'client_secret' => 'LecXkfPe2IR83PsHUFvgI8b2',
        'redirect' => 'https://akylium.com/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '1010517612792405',
        'client_secret' => 'd1b5deecd73a32623b14d10f138c519b',
        'redirect' => 'http://akylium.com/facebook/callback',
      ], 
];

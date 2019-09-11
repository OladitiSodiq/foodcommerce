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

  'google' => [
    'client_id' => env('sDei7L3gQDG8bNwBUcbzdERK'),
    // 'client_id' => env('Iv1.8b0f5515eba8ca22'),
    // 'client_secret' => env('cb20f8f4b023514b8cbf840804c4ceb1eecca9e3'),
    'client_secret' => env('503255649872-cd4f9g6st3i8l8c3ijqd5pb4a4r82v5a.apps.googleusercontent.com'),
    'redirect' => 'http://127.0.0.1:8000/callback',
  ],

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

  'sparkpost' => [
    'secret' => env('SPARKPOST_SECRET'),
  ],

  'stripe' => [
    'model' => App\User::class,
    'key' => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    'webhook' => [
      'secret' => env('STRIPE_WEBHOOK_SECRET'),
      'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
    ],
  ],

];

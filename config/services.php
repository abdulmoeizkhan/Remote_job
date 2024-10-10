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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    // config/services.php

	// ... other services credentials

	'stripe' => [
		'secret_key' =>'pk_test_51JCiBhBEJyVxZuHvU25pTiJfbzgGthMsbXpDrcpygBLuejtfLjvcTsLQzYklr2ReB8XDkEJrRm7W0ewf1JuxBYXO0033cAAvKP',
		'publishable_key'=>'sk_test_51JCiBhBEJyVxZuHvy7nISzbYKYTYJvF72YeNdMP0nj3B3ZjqEFKdP7bWakt75Np1QdL6sOWp0beg6xfHJ0NyeFdD00LxSjgXa3',
	],


];

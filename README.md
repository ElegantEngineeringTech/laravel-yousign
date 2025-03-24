# Yousign SDK for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elegantly/laravel-yousign.svg?style=flat-square)](https://packagist.org/packages/elegantly/laravel-yousign)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ElegantEngineeringTech/laravel-yousign/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ElegantEngineeringTech/laravel-yousign/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ElegantEngineeringTech/laravel-yousign/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ElegantEngineeringTech/laravel-yousign/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elegantly/laravel-yousign.svg?style=flat-square)](https://packagist.org/packages/elegantly/laravel-yousign)

Yousign API and Webhooks for your Laravel App.

## Installation

You can install the package via composer:

```bash
composer require elegantly/laravel-yousign
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-yousign-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * The Yousign API key
     */
    'api_key' => env('YOUSIGN_KEY'),

    /**
     * Whether request should be sent to the sandbox environnement
     */
    'sandbox' => env('YOUSIGN_SANDBOX', true),

    'webhooks' => [
        /*
        * Yousign will sign each webhook using a secret. You can find the used secret at the
        * webhook configuration settings: https://yousign.app/auth/workspace/integrations/webhooks
        */
        'signing_secret' => env('YOUSIGN_WEBHOOK_SECRET'),

        /*
        * You can define a default job that should be run for all other Stripe event type
        * without a job defined in next configuration.
        * You may leave it empty to store the job in database but without processing it.
        */
        'default_job' => '',

        /*
        * You can define the job that should be run when a certain webhook hits your application
        * here. The key is the name of the Stripe event type with the `.` replaced by a `_`.
        *
        * You can find a list of Stripe webhook types here:
        * https://stripe.com/docs/api#event_types.
        */
        'jobs' => [
            // 'signature_request_done' => \App\Jobs\YousignWebhooks\HandleSignatureRequestDone::class,
        ],

        /*
        * The classname of the model to be used. The class should equal or extend
        * Spatie\WebhookClient\Models\WebhookCall.
        */
        'model' => \Spatie\WebhookClient\Models\WebhookCall::class,

        /**
         * This class determines if the webhook call should be stored and processed.
         */
        'profile' => \Elegantly\Yousign\Webhooks\YousignWebhookProfile::class,

        /*
        * Specify a connection and or a queue to process the webhooks
        */
        'connection' => env('YOUSIGN_WEBHOOK_CONNECTION'),
        'queue' => env('YOUSIGN_WEBHOOK_QUEUE'),

        /*
        * When disabled, the package will not verify if the signature is valid.
        * This can be handy in local environments.
        */
        'verify_signature' => env('YOUSIGN_SIGNATURE_VERIFY', true),
    ],
];
```

## API Usage

```php
\Elegantly\Yousign\Facades\Yousign::connector()->signatureRequest()->find('YOUSIGN_SIGNATURE_ID');
```

## Webhooks Usage

```php
Route::yousignWebhooks('/yousign/webhooks');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Quentin Gabriele](https://github.com/QuentinGab)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

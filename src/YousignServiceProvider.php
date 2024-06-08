<?php

namespace Elegantly\Yousign;

use Elegantly\Yousign\Integration\YousignConnector;
use Elegantly\Yousign\Webhooks\YousignWebhooksController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class YousignServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-yousign')
            ->hasConfigFile();

        Route::macro('yousignWebhooks', function ($url) {
            return Route::post($url, YousignWebhooksController::class);
        });
    }

    public function registeringPackage()
    {
        $this->app->scoped(Yousign::class, function () {
            return new Yousign(
                new YousignConnector(
                    api_key: config('yousign.api_key'),
                    sandbox: config('yousign.sandbox'),
                )
            );
        });
    }
}

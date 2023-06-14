<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use LaravelLang\Publisher\Facades\Helpers\Locales;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app['request']->server->set('HTTPS', true);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(UrlGenerator $url): void
    {
        $url->formatScheme('https://');
        Inertia::share('selectedLocale', function () {
            return app()->getLocale();
        });

        Inertia::share('locales', function () {
            return Locales::installed();
        });
    }
}

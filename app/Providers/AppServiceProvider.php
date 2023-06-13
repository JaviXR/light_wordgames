<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Inertia::share('selectedLocale', function () {
            return app()->getLocale();
        });

        Inertia::share('locales', function () {
            return Locales::installed();
        });
    }
}

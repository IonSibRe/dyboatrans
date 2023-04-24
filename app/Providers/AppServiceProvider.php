<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $proxy_url    = getenv('PROXY_URL');
        $proxy_scheme = getenv('PROXY_SCHEME');

        if (!empty($proxy_url)) {
            \URL::forceRootUrl($proxy_url);
        }

        if (!empty($proxy_scheme)) {
            \URL::forceScheme($proxy_scheme);
        }
    }
}

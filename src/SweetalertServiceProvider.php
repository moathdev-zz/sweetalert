<?php

namespace Moathdev\Sweetalert;

use Illuminate\Support\ServiceProvider;

class SweetalertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/public/css' => public_path('css'),
            __DIR__ . '/public/js' => public_path('js'),
            __DIR__ . '/views' => base_path('resources/views'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/helpers.php';
    }
}

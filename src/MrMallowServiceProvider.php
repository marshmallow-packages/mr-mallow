<?php

namespace Marshmallow\MrMallow;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Marshmallow\MrMallow\View\Components\MrMallowAsciiComponent;

class MrMallowServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/mr-mallow.php',
            'mr-mallow'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mrmallow');

        $this->publishes([
            __DIR__ . '/../config/mr-mallow.php' => config_path('mr-mallow.php'),
        ]);

        Blade::component('mr-mallow-ascii', MrMallowAsciiComponent::class);
    }
}

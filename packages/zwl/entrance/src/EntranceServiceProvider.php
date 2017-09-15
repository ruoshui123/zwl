<?php

namespace zwl\Entrance;

use Illuminate\Support\ServiceProvider;

class EntranceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/route.php');
        $this->loadViewsFrom(__DIR__.'/views' ,'zwl');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/zwl'),
        ]);
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/zwl'),
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

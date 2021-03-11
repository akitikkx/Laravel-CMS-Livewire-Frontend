<?php

namespace Akitikkx\Frontend;

use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Akitikkx\Frontend\Frontend');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'frontend');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->publishes([__DIR__ . '/views/frontend.blade.php' => base_path('resources/views/layouts/frontend.blade.php')]);
        $this->publishes([__DIR__ . '/views/app.blade.php' => base_path('resources/views/layouts/app.blade.php')]);
        $this->publishes([__DIR__ . '/views/livewire' => base_path('resources/views/livewire')]);
        $this->publishes([__DIR__ . '/Frontend.php' => base_path('app/Http/Livewire/Frontend.php')]);

    }
}

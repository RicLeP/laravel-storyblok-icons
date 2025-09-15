<?php

namespace Riclep\LaravelStoryblokIcons;

use Illuminate\Support\ServiceProvider;

class LaravelStoryblokIconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-storyblok-icons.php' => config_path('laravel-storyblok-icons.php'),
        ], 'config');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-storyblok-icons');;
    }

    /**
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-storyblok-icons.php', 'laravel-storyblok-icons');

        $this->app->singleton('laravel-storyblok-icons', function ($app) {
            return new SvgIcon();
        });
    }
}

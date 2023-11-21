<?php

namespace Kaamrul\UniqueSlug;

use Illuminate\Support\ServiceProvider;

class UniqueSlugServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('laravel-unique-slug', function($app) {
            return new \Kaamrul\UniqueSlug\UniqueSlug();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-unique-slug.php', 'laravel-unique-slug'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/laravel-unique-slug.php' => config_path('config/laravel-unique-slug.php'),
        ]);
    }
}
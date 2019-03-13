<?php

namespace hamis\document;

use Illuminate\Support\ServiceProvider;

class documentServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'hamis');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'hamis');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/document.php', 'document');
         $this->publishes([
             // Config
             __DIR__.'/../database/migrations/' => database_path('migrations')
         ],'document');

        // Register the service the package provides.
        $this->app->singleton('document', function ($app) {
            return new document;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['document'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/document.php' => config_path('document.php'),
        ], 'document.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/hamis'),
        ], 'document.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/hamis'),
        ], 'document.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/hamis'),
        ], 'document.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}

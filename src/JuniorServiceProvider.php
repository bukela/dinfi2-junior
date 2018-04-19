<?php
namespace Dinfi2\Junior;

use Illuminate\Support\ServiceProvider;

class JuniorServiceProvider extends ServiceProvider {

    protected $defer = false;

    public function boot() {
        $this->mergeConfigFrom(__DIR__.'/../config/junior.php', 'junior');
        $this->publishes([__DIR__.'/../config/junior.php' => config_path('junior.php')], 'junior');
    }

    public function register() {
        $this->app->bind('junior', function($app) {
            return new Junior($app);
        });

        $this->app->alias('junior', 'Dinfi2\Junior\Junior');
    }
    public function provide() {

    }
}
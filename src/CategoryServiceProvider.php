<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Category;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;

/**
 * Class CategoryServiceProvider
 * @package Vof\Category
 */
class CategoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'vof.admin.category');
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'vof.admin.category');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'ext.laravel.vof.category');
        $this->publishes([
            __DIR__.'/assets/css' => public_path('css/vof.admin'),
        ], 'ext.laravel.vof.category');
        $this->publishes([
            __DIR__.'/assets/js' => public_path('js/vof.admin'),
        ], 'ext.laravel.vof.category');
        $this->publishes([
            __DIR__.'/assets/img' => public_path('css/img'),
        ], 'ext.laravel.vof.category');
    }

    public function register()
    {
        
    }
}

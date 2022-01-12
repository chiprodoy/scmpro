<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::componentNamespace('App\\View\\Components\\Adminlte', 'adminlte');
        Blade::componentNamespace('App\\View\\Components\\Adminlte\\Forms', 'adminlte-forms');
        Blade::componentNamespace('App\\View\\Components\\Adminlte\\Layout', 'adminlte-layout');
        date_default_timezone_set('Asia/Jakarta');
    }
}

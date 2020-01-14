<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Blade;

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
        Schema::defaultStringLength(191);
        Blade::directive('welcome', function() {
            return "<center><u>welcome to Smaher website</u></center>";
        });
        Blade::if('admin', function() {
            return auth()->check() && auth()->user()->isAdmin();
        });
    }
}

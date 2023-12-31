<?php

namespace App\Providers;

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
        foreach (glob(app_path() . '/Helpers/*.php') as $filename) {
            // dd($filename);
            require_once($filename);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //define public path
        // $this->app->bind('path.public', function () {
        //     return dirname(getcwd(), 1) . '/public';
        // });
    }
}

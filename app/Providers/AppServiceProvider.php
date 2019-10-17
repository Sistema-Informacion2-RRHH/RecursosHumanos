<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public',function(){
            Return base_path().'/public_html';
        });
    }
}

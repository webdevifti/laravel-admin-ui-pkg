<?php
namespace Webdevifti\Admindash;

use Illuminate\Support\ServiceProvider;

class AdminDashServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadViewsFrom(__DIR__.'/views/','admindash');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/admindash'),
            __DIR__.'/public' => public_path('vendor/admindash'),
        ]);
    }

    public function register(){

    }
}
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\NSX;
use App\MonTT;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('header',function($view){
        $ns_x= NSX::all();
        $view->with('ns_x',$ns_x);
       });

       view()->composer('header',function($view){
        $mon_tt= MonTT::all();
        $view->with('mon_tt',$mon_tt);
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

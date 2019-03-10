<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\NSX;
use App\MonTT;
use Session;
use App\Cart;

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

       view()->composer(['header','Page.checkout'],function($view){
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        }
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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view)   
        {    
            $cart = Cart::where('user_id', Session::get('RLuserID'))->get();      
            $view->with(['cart' => $cart]);                  
        }); 
    }
}

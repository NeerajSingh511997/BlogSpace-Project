<?php

namespace App\Providers;

use App\Category;
use App\Preference;
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
       view()->composer('layouts.website', function($view) {

            $preference = Preference::latest()->first();
            $categories = Category::all()->take(5);
            $view->with(compact('preference', 'categories'));

       });
    }
}

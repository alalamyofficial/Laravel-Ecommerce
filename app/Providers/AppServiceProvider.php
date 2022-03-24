<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Shop;
use App\Category;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Facades\Voyager;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::useModel('Category', \App\Category::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Schema::hasTable('categories')) {

            $categories = cache()->remember('categories','3600', function(){
                return Category::whereNull('parent_id')->get();
            });

            view()->share('categories', $categories);
        }
    }
}

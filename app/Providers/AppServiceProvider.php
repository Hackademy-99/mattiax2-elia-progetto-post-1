<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facade\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View as Enter;

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
        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            Enter::share(['categories'=>$categories]);
        }
    }
}
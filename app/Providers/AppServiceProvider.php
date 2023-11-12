<?php

namespace App\Providers;

use App\Models\CompanyProfile;
use App\Models\PhotoGallery;
use App\Models\Product;
use App\Models\User;
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
        view()->share('company_profile', CompanyProfile::first());
        view()->share('products', Product::get());
        view()->share('photo_galleries', PhotoGallery::get());
        // view()->share('user', User::get());
    }
}

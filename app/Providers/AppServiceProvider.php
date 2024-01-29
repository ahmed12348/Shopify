<?php

namespace App\Providers;

use Gnikyt\BasicShopifyAPI\Store\Memory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $listen = [
        'eloquent.creating: Osiset\ShopifyApp\Contracts\ShopModel' => [
            'Osiset\ShopifyApp\Storage\Observers\Shop@creating',
        ],
    ];

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
        Schema::defaultStringLength(191);
    }
}

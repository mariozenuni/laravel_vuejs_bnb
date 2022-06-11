<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use phpDocumentor\Reflection\Types\Resource_;
use Illuminate\Http\Resources\Json\JsonResource;

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
        //fields that are strings and keys cannot be longer then 191 carracters 
        Schema::defaultStringLength(191);
        //JsonResource::withoutWrapping();
    }
}

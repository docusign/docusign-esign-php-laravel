<?php

namespace DocuSign\eSign;

use DocuSign\eSign\Client\ApiClient;
use Illuminate\Support\ServiceProvider;

class ESignServiceProvider extends ServiceProvider
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
        $this->app->singleton(ApiClient::class, function () {
            return new ApiClient();
        });
    }
}

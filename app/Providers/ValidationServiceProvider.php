<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CustomValidator;
use Validator;

class ValidationServiceProvider extends ServiceProvider {

    // Make sure this provider is registered in Application Service Providers in config/app.php

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->validator->resolver(function($translator, $data, $rules, $messages)
        {
            return new CustomValidator($translator, $data, $rules, $messages);
        });
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

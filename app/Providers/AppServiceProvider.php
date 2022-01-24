<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mras\CustomAuth\Classes\CustomRegister;

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
        CustomRegister::customValidationRules([
            'name' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        CustomRegister::customRegisterView(function () {
            return view('custom-view');
        });
    }
}

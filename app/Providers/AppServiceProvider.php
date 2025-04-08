<?php

namespace App\Providers;

use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use App\Http\Responses\CustomLoginResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse;
use App\Http\Responses\CustomLogoutResponse;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Login
        // $this->app->bind(LoginResponse::class, CustomLoginResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

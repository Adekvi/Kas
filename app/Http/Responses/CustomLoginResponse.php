<?php

namespace App\Http\Responses;

use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\RedirectResponse;

class CustomLoginResponse implements LoginResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        $user = Filament::auth()->user();

        $targetUrl = match ($user->role) {
            'admin' => '/admin',
            'user' => '/user',
            default => '/',
        };

        return new RedirectResponse($targetUrl);
    }
}

<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\LogoutResponse as BaseLogoutResponse;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;
use Illuminate\Http\RedirectResponse;

class CustomLogoutResponse extends BaseLogoutResponse implements LogoutResponseContract
{
    public function toResponse($request): RedirectResponse
    {
        // Ganti ini sesuai kebutuhanmu
        $role = $request->user()?->role;

        return match ($role) {
            'admin', 'user' => redirect('/login'),
            default => redirect('/'),
        };
    }
}

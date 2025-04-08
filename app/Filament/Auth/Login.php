<?php

namespace App\Filament\Auth;

use Filament\Facades\Filament;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Form;
use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Forms\Components\TextInput;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{
    protected ?Authenticatable $user = null;
    public bool $remember = false;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('login')
                    ->label('Username / Email')
                    ->required()
                    ->autocomplete('username'),

                TextInput::make('password')
                    ->label('Password')
                    ->required()
                    ->password()
                    ->autocomplete('current-password'),

                Checkbox::make('remember')
                    ->label('Remember me'),
            ]);
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        $login = $data['login'];
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        return [
            $fieldType => $login,
            'password' => $data['password'],
        ];
    }

    protected function attemptLogin(): bool
    {
        $credentials = $this->getCredentialsFromFormData($this->form->getState());

        if (Auth::attempt($credentials, $this->remember)) {
            $this->user = Auth::user();

            // Hanya izinkan login jika role-nya "user"
            if ($this->user->role !== 'user') {
                Auth::logout();
                $this->user = null;
                return false;
            }

            return true;
        }

        return false;
    }

    protected function getUser(): Authenticatable
    {
        if (! $this->user) {
            throw new \RuntimeException('User not set. Make sure authentication is successful before calling getUser().');
        }

        return $this->user;
    }

    public function authenticate(): LoginResponse
    {
        $this->validate();

        if (! $this->attemptLogin()) {
            $this->addError('login', __('auth.failed'));
            return app(LoginResponse::class);
        }

        Filament::auth()->login($this->getUser(), $this->remember);
        session()->regenerate();

        return app(LoginResponse::class);
    }
}

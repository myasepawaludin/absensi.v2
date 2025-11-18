<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;
use Illuminate\Support\Facades\Session;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;

class Login extends BaseLogin
{
    protected static string $view = 'filament.pages.login';
    

    public function getHeading(): string
    {
        return 'Login';
    }

    protected function hasFullWidthFormActions(): bool
    {
        return true;
    }

    public function mount(): void
    {
        parent::mount();

        // Emit event untuk mengisi email dari localStorage di frontend
        $this->dispatch('login-page-loaded');
    }

    public function authenticate(): ?LoginResponse
    {
        try {
            // Simpan email dan status remember ke session sebelum authenticate
            $email = $this->form->getState()['email'] ?? null;
            $remember = $this->form->getState()['remember'] ?? false;

            if ($remember && $email) {
                Session::put('should_remember_email', $email);
            } else {
                Session::forget('should_remember_email');
            }

            return parent::authenticate();
        } catch (TooManyRequestsException $exception) {
            throw $exception;
        }
    }
}
<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;

class CustomProfile extends BaseEditProfile
{
    protected static string $view = 'filament.pages.custom-profile';

    public function getTitle(): string
    {
        return 'Sistem Absensi SMK BINUSA | Profil';
    }

    public function getHeading(): string
    {
        return 'Profil';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Profil')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->disabled()
                            ->dehydrated(false),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                    ]),
                Section::make('Ubah Password')
                    ->schema([
                        TextInput::make('password')
                            ->label('Password Baru')
                            ->password()
                            ->revealable()
                            ->nullable()
                            ->confirmed()
                            ->minLength(5)
                            ->live(debounce: 50)
                            ->dehydrateStateUsing(fn ($state) => filled($state) ? bcrypt($state) : null)
                            ->dehydrated(fn ($state) => filled($state)),
                        TextInput::make('password_confirmation')
                            ->label('Konfirmasi Password Baru')
                            ->password()
                            ->revealable()
                            ->nullable()
                            ->dehydrated(false)
                            ->visible(fn ($get) => !empty($get('password'))),
                    ]),
            ]);
    }
}
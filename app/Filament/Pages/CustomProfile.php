<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
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

    /**
     * Handle the profile update with email change detection
     */
    protected function handleRecordUpdate(\Illuminate\Database\Eloquent\Model $record, array $data): \Illuminate\Database\Eloquent\Model
    {
        // Simpan email lama untuk pengecekan
        $oldEmail = $record->email;

        // Update user data
        $record->fill($data);
        $record->save();

        // Cek apakah email berubah
        if ($oldEmail !== $record->email) {
            // Kirim notifikasi sukses
            Notification::make()
                ->success()
                ->title('Email Berhasil Diubah')
                ->body('Silakan cek email Anda untuk verifikasi email baru.')
                ->persistent()
                ->send();

            // Redirect ke halaman verifikasi email
            $this->redirect(route('filament.admin.auth.email-verification.prompt'), navigate: false);
        } else {
            // Jika email tidak berubah, tampilkan notifikasi biasa
            Notification::make()
                ->success()
                ->title('Profil Berhasil Diperbarui')
                ->send();
        }

        return $record;
    }
}
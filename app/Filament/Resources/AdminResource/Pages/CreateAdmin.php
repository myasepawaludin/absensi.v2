<?php

namespace App\Filament\Resources\AdminResource\Pages;

use App\Filament\Resources\AdminResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;

    public function getTitle(): string
    {
        return 'Tambah Admin | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Tambah Admin';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
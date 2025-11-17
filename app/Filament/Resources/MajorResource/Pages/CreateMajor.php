<?php

namespace App\Filament\Resources\MajorResource\Pages;

use App\Filament\Resources\MajorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMajor extends CreateRecord
{
    protected static string $resource = MajorResource::class;

    public function getTitle(): string
    {
        return 'Tambah Jurusan | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Tambah Jurusan';
    }
}
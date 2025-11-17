<?php

namespace App\Filament\Resources\SchoolClassResource\Pages;

use App\Filament\Resources\SchoolClassResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSchoolClass extends CreateRecord
{
    protected static string $resource = SchoolClassResource::class;

    public function getTitle(): string
    {
        return 'Tambah Kelas | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Tambah Kelas';
    }
}
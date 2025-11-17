<?php

namespace App\Filament\Resources\SchoolClassResource\Pages;

use App\Filament\Resources\SchoolClassResource;
use Filament\Resources\Pages\ListRecords;

class ListSchoolClasses extends ListRecords
{
    protected static string $resource = SchoolClassResource::class;

    public function getTitle(): string
    {
        return 'Data Kelas | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Data Kelas';
    }
}
<?php

namespace App\Filament\Resources\MajorResource\Pages;

use App\Filament\Resources\MajorResource;
use Filament\Resources\Pages\ListRecords;

class ListMajors extends ListRecords
{
    protected static string $resource = MajorResource::class;

    public function getTitle(): string
    {
        return 'Data Jurusan | Sistem Absensi SMK BINUSA ';
    }

    public function getHeading(): string
    {
        return 'Data Jurusan';
    }
}
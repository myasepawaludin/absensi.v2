<?php

namespace App\Filament\Resources\TeacherResource\Pages;

use App\Filament\Resources\TeacherResource;
use Filament\Resources\Pages\ListRecords;

class ListTeachers extends ListRecords
{
    protected static string $resource = TeacherResource::class;

    public function getTitle(): string
    {
        return 'Data Guru | Sistem Absensi SMK BINUSA ';
    }

    public function getHeading(): string
    {
        return 'Data Guru';
    }
}
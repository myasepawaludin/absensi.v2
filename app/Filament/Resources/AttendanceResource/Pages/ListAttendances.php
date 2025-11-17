<?php

namespace App\Filament\Resources\AttendanceResource\Pages;

use App\Filament\Resources\AttendanceResource;
use Filament\Resources\Pages\ListRecords;

class ListAttendances extends ListRecords
{
    protected static string $resource = AttendanceResource::class;

    public function getTitle(): string
    {
        return 'Kelola Absen Siswa | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Kelola Absen Siswa';
    }
}
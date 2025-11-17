<?php

namespace App\Filament\Resources\AttendanceResource\Pages;

use App\Filament\Resources\AttendanceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAttendance extends CreateRecord
{
    protected static string $resource = AttendanceResource::class;

    public function getTitle(): string
    {
        return 'Tambah Absen | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Tambah Absen';
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['student_id'])) {
            $student = \App\Models\Student::find($data['student_id']);
            if ($student) {
                $data['class_id'] = $student->class_id;
            }
        }

        return $data;
    }
}
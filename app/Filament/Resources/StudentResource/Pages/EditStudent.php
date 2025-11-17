<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudent extends EditRecord
{
    protected static string $resource = StudentResource::class;

    public function getTitle(): string
    {
        return 'Edit Siswa | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Edit Siswa';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
<?php

namespace App\Filament\Resources\MajorResource\Pages;

use App\Filament\Resources\MajorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMajor extends EditRecord
{
    protected static string $resource = MajorResource::class;

    public function getTitle(): string
    {
        return 'Edit Jurusan | Sistem Absensi SMK BINUSA';
    }

    public function getHeading(): string
    {
        return 'Edit Jurusan';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
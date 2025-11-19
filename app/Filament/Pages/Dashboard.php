<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationLabel = 'Beranda';
    protected static ?string $title = 'Beranda';
    protected ?string $heading = 'Beranda';

    public function getHeading(): string | \Illuminate\Contracts\Support\Htmlable
    {
        return 'Beranda';
    }

    public function getTitle(): string | \Illuminate\Contracts\Support\Htmlable
    {
        return 'Sistem Absensi SMK BINUSA | Beranda';
    }

    public static function getNavigationLabel(): string
    {
        return 'Beranda';
    }

    public function mount(): void
    {
        $this->heading = 'Beranda';
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    // PERBAIKAN: Method ini yang mengatur column layout untuk widgets
    public function getColumns(): int | string | array
    {
        return [
            'default' => 1,
            'sm' => 1,
            'md' => 2,
            'lg' => 4,  // Desktop akan show 4 kolom
            'xl' => 4,
            '2xl' => 4,
        ];
    }
}
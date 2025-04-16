<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Siswa', '1,250')
                ->description('Naik 5% dari bulan lalu')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('success'),

            Stat::make('Total Guru', '85')
                ->description('Tetap stabil')
                ->descriptionIcon('heroicon-o-minus')
                ->color('gray'),

            Stat::make('Total Kelas', '32')
                ->description('Naik 2 kelas baru')
                ->descriptionIcon('heroicon-o-plus-circle')
                ->color('info'),
        ];
    }
}

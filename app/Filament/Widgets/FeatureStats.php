<?php

namespace App\Filament\Widgets;

use App\Models\Feature;
use App\Filament\Resources\Features\FeatureResource;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class FeatureStats extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Fitur Utama', Feature::count())
                ->description('Lihat Semua Fitur')
                ->descriptionIcon('heroicon-m-arrow-right')
                ->color('primary')
                ->url(FeatureResource::getUrl('index')),
        ];
    }
}
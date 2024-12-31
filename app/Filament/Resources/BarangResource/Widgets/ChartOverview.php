<?php

namespace App\Filament\Resources\BarangResource\Widgets;

use App\Models\BarangKeluar;
use Filament\Widgets\ChartWidget;

class ChartOverview extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $data = BarangKeluar::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(stok) as total_stok')
        ->groupBy('month')
        ->get();
        $labels = $data->pluck('month');
        $datasets = [
            [
                'label' => 'Total Stok',
                'data' => $data->pluck('total_stok'),
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 1,
            ],
        ];
        return [
            'datasets' => $datasets,
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

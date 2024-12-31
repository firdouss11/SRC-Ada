<?php

namespace App\Filament\Resources\BarangResource\Widgets;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BarangOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Barang', Barang::count()),
            Stat::make('Total Barang Keluar', BarangKeluar::whereMonth('created_at', now()->month)->sum('stok')),
            Stat::make('Total Barang Masuk', BarangMasuk::whereMonth('created_at', now()->month)->sum('stok')),
        ];
    }
}

<?php

namespace App\Filament\Resources\BarangMasukResource\Pages;

use App\Filament\Resources\BarangMasukResource;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use App\Models\Barang;
class CreateBarangMasuk extends CreateRecord
{
    protected static string $resource = BarangMasukResource::class;
    public function form(Form $form): Form
    {
    return $form
        ->schema([

            //card
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Select::make('barang_id')->relationship('barang', 'nama_barang'),
                    Forms\Components\Select::make('supplier_id')->relationship('supplier', 'nama_supplier'),

                    Forms\Components\TextInput::make('stok')
                      ->label('Stock Barang')
                      ->placeholder('Stock Barang')
                      ->required(),
                ])
        ]);
    }
    protected function afterCreate(): void
    {
        $stok = $this->record->stok;
        $barang = Barang::find($this->record->barang_id);
        $barang->stock = $barang->stock + $stok;
        $barang->save();
    }
}

<?php

namespace App\Filament\Resources\BarangKeluarResource\Pages;

use App\Filament\Resources\BarangKeluarResource;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Barang;
use Filament\Notifications\Notification;


class CreateBarangKeluar extends CreateRecord
{
    protected static string $resource = BarangKeluarResource::class;
    public function form(Form $form): Form
    {
    return $form
        ->schema([

            //card
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Select::make('barang_id')->relationship('barang', 'nama_barang'),
                    Forms\Components\Select::make('customer_id')->relationship('customer', 'nama_customer'),

                    Forms\Components\TextInput::make('stok')
                      ->label('Stock Barang')
                      ->placeholder('Stock Barang')
                      ->required(),
                ])
        ]);
    }
    protected function beforeCreate(){
        $barang = Barang::find($this->data['barang_id']);
        if($barang->stock < ((int)$this->data['stok'])) {
            Notification::make()
            ->warning()
            ->title('Stok Barang kurang dari '.$this->data['stok'])
            ->send();
            $this->halt();
        }
    }
    protected function afterCreate(): void
    {
        $stok = $this->record->stok;
        $barang = Barang::find($this->record->barang_id);
        $barang->stock = $barang->stock - $stok;
        $barang->save();
    }
}

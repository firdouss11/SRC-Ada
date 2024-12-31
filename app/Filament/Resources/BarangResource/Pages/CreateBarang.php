<?php

namespace App\Filament\Resources\BarangResource\Pages;

use App\Filament\Resources\BarangResource;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateBarang extends CreateRecord
{
    protected static string $resource = BarangResource::class;

    public function form(Form $form): Form
    {
    return $form
        ->schema([

            //card
            Forms\Components\Card::make()
                ->schema([

                    Forms\Components\TextInput::make('nama_barang')
                      ->label('Nama Barang')
                      ->placeholder('Nama Barang')
                      ->required(),

                    //description
                    Forms\Components\Textarea::make('deskripsi')
                      ->label('Deskripsi')
                      ->placeholder('Deskripsi')
                      ->rows(5)
                      ->required(),

                      Forms\Components\TextInput::make('stock')
                      ->label('Stok')
                      ->placeholder('Stok')
                      ->required(),


                      Forms\Components\TextInput::make('harga')
                      ->label('Harga')
                      ->placeholder('Harga')
                      ->required(),
                ])
        ]);
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\SupplierResource\Pages;

use App\Filament\Resources\SupplierResource;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateSupplier extends CreateRecord
{
    protected static string $resource = SupplierResource::class;
    public function form(Form $form): Form
{
    return $form
        ->schema([

            //card
            Forms\Components\Card::make()
                ->schema([

                    Forms\Components\TextInput::make('nama_supplier')
                      ->label('Nama Supplier')
                      ->placeholder('Nama Supplier')
                      ->required(),

                    //description
                    Forms\Components\Textarea::make('lokasi_supplier')
                      ->label('Lokasi Supplier')
                      ->placeholder('Lokasi Supplier')
                      ->rows(5)
                      ->required(),
                ])
        ]);
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

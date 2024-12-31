<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
    public function form(Form $form): Form
    {
    return $form
        ->schema([

            //card
            Forms\Components\Card::make()
                ->schema([

                    Forms\Components\TextInput::make('nama_customer')
                      ->label('Nama Customer')
                      ->placeholder('Nama Customer')
                      ->required(),

                    //description
                    Forms\Components\Textarea::make('lokasi_customer')
                      ->label('Lokasi Customer')
                      ->placeholder('Lokasi Customer')
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

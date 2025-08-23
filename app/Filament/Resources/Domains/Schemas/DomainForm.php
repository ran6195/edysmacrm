<?php

namespace App\Filament\Resources\Domains\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use App\Enums\DomainStatus;

class DomainForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('description'),
                Select::make('id_customer')
                    ->label('Customer')
                    ->relationship('customer', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('name')->required(),
                        TextInput::make('partita_iva'),
                        TextInput::make('referente'),
                        TextInput::make('telefono'),
                        TextInput::make('email'),
                        TextInput::make('note'),
                    ]),
                Select::make('status')
                    ->options(
                        collect(DomainStatus::cases())
                            ->mapWithKeys(fn($case) => [$case->value => ucfirst(str_replace('_', ' ', $case->value))])
                            ->toArray()
                    )
                    ->default(DomainStatus::ACTIVE->value)
                    ->required(),
                TextInput::make('owner'),
                TextInput::make('managed_by'),
            ]);
    }
}

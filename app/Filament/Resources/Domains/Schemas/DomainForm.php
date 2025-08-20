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

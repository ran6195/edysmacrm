<?php

namespace App\Filament\Resources\Domains\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use App\Enums\DomainStatus;

class DomainInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('description'),
                TextEntry::make('customer.name')
                    ->label('Customer'),
                TextEntry::make('status')
                    ->formatStateUsing(fn($state) => ucfirst(str_replace('_', ' ', DomainStatus::from($state)->value))),
                TextEntry::make('owner'),
                TextEntry::make('managed_by'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
            ]);
    }
}

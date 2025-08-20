<?php

namespace App\Filament\Resources\Domains\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DomainInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('description'),
                TextEntry::make('status'),
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

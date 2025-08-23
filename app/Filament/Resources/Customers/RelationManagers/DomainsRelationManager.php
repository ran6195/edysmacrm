<?php

namespace App\Filament\Resources\Customers\RelationManagers;

use App\Filament\Resources\Domains\DomainResource;
use App\Models\Domain;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DomainsRelationManager extends RelationManager
{
    protected static string $relationship = 'domains';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('status')->searchable(),
                TextColumn::make('owner')->searchable(),
            ])
            ->actions([
                ViewAction::make()
                    ->url(fn (Domain $record): string => DomainResource::getUrl('view', ['record' => $record]))
            ]);
    }
}

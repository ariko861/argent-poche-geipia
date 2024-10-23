<?php

namespace App\Filament\Resources\CompteResource\Pages;

use App\Filament\Resources\CompteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComptes extends ListRecords
{
    protected static string $resource = CompteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\User\Resources\BayarResource\Pages;

use App\Filament\User\Resources\BayarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBayars extends ListRecords
{
    protected static string $resource = BayarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

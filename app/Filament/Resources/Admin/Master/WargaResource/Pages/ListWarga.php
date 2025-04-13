<?php

namespace App\Filament\Resources\Admin\Master\WargaResource\Pages;

use App\Filament\Resources\Admin\Master\WargaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarga extends ListRecords
{
    protected static string $resource = WargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

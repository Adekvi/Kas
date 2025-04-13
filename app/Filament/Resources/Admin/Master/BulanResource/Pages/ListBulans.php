<?php

namespace App\Filament\Resources\Admin\Master\BulanResource\Pages;

use App\Filament\Resources\Admin\Master\BulanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBulans extends ListRecords
{
    protected static string $resource = BulanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Kas\UangMasukResource\Pages;

use App\Filament\Resources\Admin\Kas\UangMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUangMasuks extends ListRecords
{
    protected static string $resource = UangMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

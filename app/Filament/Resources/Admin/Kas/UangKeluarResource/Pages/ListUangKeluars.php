<?php

namespace App\Filament\Resources\Admin\Kas\UangKeluarResource\Pages;

use App\Filament\Resources\Admin\Kas\UangKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUangKeluars extends ListRecords
{
    protected static string $resource = UangKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

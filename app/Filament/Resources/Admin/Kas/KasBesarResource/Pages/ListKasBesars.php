<?php

namespace App\Filament\Resources\Kas\KasBesarResource\Pages;

use App\Filament\Resources\Admin\Kas\KasBesarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKasBesars extends ListRecords
{
    protected static string $resource = KasBesarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

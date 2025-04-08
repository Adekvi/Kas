<?php

namespace App\Filament\Resources\Kas\SumbanganResource\Pages;

use App\Filament\Resources\Admin\Kas\SumbanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumbangans extends ListRecords
{
    protected static string $resource = SumbanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

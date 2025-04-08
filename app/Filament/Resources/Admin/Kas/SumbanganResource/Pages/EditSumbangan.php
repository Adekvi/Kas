<?php

namespace App\Filament\Resources\Kas\SumbanganResource\Pages;

use App\Filament\Resources\Admin\Kas\SumbanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumbangan extends EditRecord
{
    protected static string $resource = SumbanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

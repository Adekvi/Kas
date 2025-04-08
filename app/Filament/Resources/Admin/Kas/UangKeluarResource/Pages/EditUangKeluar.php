<?php

namespace App\Filament\Resources\Kas\UangKeluarResource\Pages;

use App\Filament\Resources\Admin\Kas\UangKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUangKeluar extends EditRecord
{
    protected static string $resource = UangKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

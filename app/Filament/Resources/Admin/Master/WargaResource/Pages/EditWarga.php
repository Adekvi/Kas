<?php

namespace App\Filament\Resources\Admin\Master\WargaResource\Pages;

use App\Filament\Resources\Admin\Master\WargaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarga extends EditRecord
{
    protected static string $resource = WargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

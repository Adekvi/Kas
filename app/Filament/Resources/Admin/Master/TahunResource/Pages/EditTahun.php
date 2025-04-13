<?php

namespace App\Filament\Resources\Admin\Master\TahunResource\Pages;

use App\Filament\Resources\Admin\Master\TahunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTahun extends EditRecord
{
    protected static string $resource = TahunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

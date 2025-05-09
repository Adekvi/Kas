<?php

namespace App\Filament\Resources\Admin\Master\BulanResource\Pages;

use App\Filament\Resources\Admin\Master\BulanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBulan extends EditRecord
{
    protected static string $resource = BulanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

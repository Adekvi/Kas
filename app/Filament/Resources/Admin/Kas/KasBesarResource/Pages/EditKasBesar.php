<?php

namespace App\Filament\Resources\Admin\Kas\KasBesarResource\Pages;

use App\Filament\Resources\Admin\Kas\KasBesarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKasBesar extends EditRecord
{
    protected static string $resource = KasBesarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\User\Resources\BayarResource\Pages;

use App\Filament\User\Resources\BayarResource;
use App\Filament\User\Resources\BayarResource\Pages;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBayar extends EditRecord
{
    protected static string $resource = BayarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

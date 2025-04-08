<?php

namespace App\Filament\Resources\Kas\KasBesarResource\Pages;

use App\Filament\Resources\Admin\Kas\KasBesarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKasBesar extends CreateRecord
{
    protected static string $resource = KasBesarResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

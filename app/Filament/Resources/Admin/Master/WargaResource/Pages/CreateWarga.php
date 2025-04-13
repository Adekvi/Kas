<?php

namespace App\Filament\Resources\Admin\Master\WargaResource\Pages;

use App\Filament\Resources\Admin\Master\WargaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWarga extends CreateRecord
{
    protected static string $resource = WargaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke daftar warga
    }
}

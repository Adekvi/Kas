<?php

namespace App\Filament\Resources\Admin\Master\TahunResource\Pages;

use App\Filament\Resources\Admin\Master\TahunResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTahun extends CreateRecord
{
    protected static string $resource = TahunResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke daftar warga
    }
}

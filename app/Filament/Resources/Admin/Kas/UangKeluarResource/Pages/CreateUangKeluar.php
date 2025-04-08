<?php

namespace App\Filament\Resources\Kas\UangKeluarResource\Pages;

use App\Filament\Resources\Admin\Kas\UangKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUangKeluar extends CreateRecord
{
    protected static string $resource = UangKeluarResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke daftar warga
    }
}

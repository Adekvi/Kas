<?php

namespace App\Filament\Resources\Admin\Kas\UangMasukResource\Pages;

use App\Filament\Resources\Admin\Kas\UangMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUangMasuk extends CreateRecord
{
    protected static string $resource = UangMasukResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke daftar warga
    }
}

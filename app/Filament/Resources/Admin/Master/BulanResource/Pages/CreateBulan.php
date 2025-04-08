<?php

namespace App\Filament\Resources\Master\BulanResource\Pages;

use App\Filament\Resources\Admin\Master\BulanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBulan extends CreateRecord
{
    protected static string $resource = BulanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke daftar warga
    }
}

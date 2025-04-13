<?php

namespace App\Filament\User\Resources\BayarResource\Pages;

use App\Filament\User\Resources\BayarResource;
use App\Filament\User\Resources\BayarResource\Pages;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBayar extends CreateRecord
{
    protected static string $resource = BayarResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke daftar warga
    }
}

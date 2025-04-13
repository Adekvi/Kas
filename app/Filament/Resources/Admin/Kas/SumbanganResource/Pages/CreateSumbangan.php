<?php

namespace App\Filament\Resources\Admin\Kas\SumbanganResource\Pages;

use App\Filament\Resources\Admin\Kas\SumbanganResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSumbangan extends CreateRecord
{
    protected static string $resource = SumbanganResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Admin\Resources\GaleriResource\Pages;

use App\Filament\Admin\Resources\GaleriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGaleri extends EditRecord
{
    protected static string $resource = GaleriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

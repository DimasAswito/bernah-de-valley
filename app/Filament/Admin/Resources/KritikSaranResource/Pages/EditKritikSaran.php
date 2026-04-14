<?php

namespace App\Filament\Admin\Resources\KritikSaranResource\Pages;

use App\Filament\Admin\Resources\KritikSaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKritikSaran extends EditRecord
{
    protected static string $resource = KritikSaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

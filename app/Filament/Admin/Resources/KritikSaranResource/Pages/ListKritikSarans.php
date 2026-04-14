<?php

namespace App\Filament\Admin\Resources\KritikSaranResource\Pages;

use App\Filament\Admin\Resources\KritikSaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKritikSarans extends ListRecords
{
    protected static string $resource = KritikSaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

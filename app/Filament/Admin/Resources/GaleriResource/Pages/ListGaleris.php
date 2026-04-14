<?php

namespace App\Filament\Admin\Resources\GaleriResource\Pages;

use App\Filament\Admin\Resources\GaleriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGaleris extends ListRecords
{
    protected static string $resource = GaleriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

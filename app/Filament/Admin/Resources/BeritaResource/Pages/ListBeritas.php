<?php

namespace App\Filament\Admin\Resources\BeritaResource\Pages;

use App\Filament\Admin\Resources\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeritas extends ListRecords
{
    protected static string $resource = BeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

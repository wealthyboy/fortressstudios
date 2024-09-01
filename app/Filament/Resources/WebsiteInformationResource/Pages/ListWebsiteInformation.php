<?php

namespace App\Filament\Resources\WebsiteInformationResource\Pages;

use App\Filament\Resources\WebsiteInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebsiteInformation extends ListRecords
{
    protected static string $resource = WebsiteInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace Modules\Mail\Filament\Resources\WhitelistResource\Pages;

use Modules\Mail\Filament\Resources\WhitelistResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhitelists extends ListRecords
{
    protected static string $resource = WhitelistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

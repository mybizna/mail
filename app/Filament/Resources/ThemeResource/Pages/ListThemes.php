<?php

namespace Modules\Mail\Filament\Resources\ThemeResource\Pages;

use Modules\Mail\Filament\Resources\ThemeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThemes extends ListRecords
{
    protected static string $resource = ThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace Modules\Mail\Filament\Resources\SignatureResource\Pages;

use Modules\Mail\Filament\Resources\SignatureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSignatures extends ListRecords
{
    protected static string $resource = SignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

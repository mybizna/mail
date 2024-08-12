<?php

namespace Modules\Mail\Filament\Resources\SignatureResource\Pages;

use Modules\Mail\Filament\Resources\SignatureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSignature extends EditRecord
{
    protected static string $resource = SignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

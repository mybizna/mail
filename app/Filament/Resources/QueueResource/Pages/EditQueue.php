<?php

namespace Modules\Mail\Filament\Resources\QueueResource\Pages;

use Modules\Mail\Filament\Resources\QueueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQueue extends EditRecord
{
    protected static string $resource = QueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

<?php

namespace Modules\Mail\Filament\Resources\QueueResource\Pages;

use Modules\Base\Filament\Resources\Pages\ListingBase;
use Modules\Mail\Filament\Resources\QueueResource;

// Class List that extends ListBase
class Listing extends ListingBase
{
    protected static string $resource = QueueResource::class;
}

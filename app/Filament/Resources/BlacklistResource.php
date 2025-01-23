<?php

namespace Modules\Mail\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mail\Models\Blacklist;

class BlacklistResource extends BaseResource
{
    protected static ?string $model = Blacklist::class;

    protected static ?string $slug = 'mail/blacklist';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}

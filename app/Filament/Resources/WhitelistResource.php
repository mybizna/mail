<?php

namespace Modules\Mail\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mail\Models\Whitelist;

class WhitelistResource extends BaseResource
{
    protected static ?string $model = Whitelist::class;

    protected static ?string $slug = 'mail/whitelist';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}

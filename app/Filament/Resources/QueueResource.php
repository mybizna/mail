<?php

namespace Modules\Mail\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mail\Models\Queue;

class QueueResource extends BaseResource
{
    protected static ?string $model = Queue::class;

    protected static ?string $slug = 'mail/queue';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}

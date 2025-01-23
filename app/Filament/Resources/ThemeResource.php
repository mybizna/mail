<?php

namespace Modules\Mail\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mail\Models\Theme;

class ThemeResource extends BaseResource
{
    protected static ?string $model = Theme::class;

    protected static ?string $slug = 'mail/theme';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}

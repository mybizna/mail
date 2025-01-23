<?php

namespace Modules\Mail\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mail\Models\Signature;

class SignatureResource extends BaseResource
{
    protected static ?string $model = Signature::class;

    protected static ?string $slug = 'mail/signature';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}

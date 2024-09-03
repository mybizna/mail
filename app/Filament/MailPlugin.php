<?php

namespace Modules\Mail\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class MailPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Mail';
    }

    public function getId(): string
    {
        return 'mail';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}

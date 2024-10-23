<?php

/** @var \Modules\Base\Classes\Fetch\Menus $this */

$this->add_module_info("mail", [
    'title' => 'Mail',
    'description' => 'Mail',
    'icon' => 'fas fa-envelope',
    'path' => '/mail/admin/contact',
    'class_str' => 'text-secondary border-secondary',
    'position' => 3,
]);

$this->add_menu("mail", "contact", "Contact", "/mail/admin/contact", "fas fa-cogs", 1);
$this->add_menu("mail", "theme", "Theme", "/mail/admin/theme", "fas fa-cogs", 2);
$this->add_menu("mail", "setting", "Setting", "/mail/admin/setting", "fas fa-cogs", 5);


$this->add_submenu("mail", "setting", "Signature", "/mail/admin/signature", 5);
$this->add_submenu("mail", "setting", "Blacklist", "/mail/admin/blacklist", 5);
$this->add_submenu("mail", "setting", "Whitelist", "/mail/admin/whitelist", 5);




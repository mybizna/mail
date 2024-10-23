<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

$this->add_right("mail", "blacklist", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "blacklist", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "blacklist", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "blacklist", "staff", view:true, add:true, edit:true);
$this->add_right("mail", "blacklist", "registered", view:true, add:true);
$this->add_right("mail", "blacklist", "guest", view:true, );

$this->add_right("mail", "contact", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "contact", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "contact", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "contact", "staff", view:true, add:true, edit:true);
$this->add_right("mail", "contact", "registered", view:true, add:true);
$this->add_right("mail", "contact", "guest", view:true, );

$this->add_right("mail", "queue", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "queue", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "queue", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "queue", "staff", view:true, add:true, edit:true);
$this->add_right("mail", "queue", "registered", view:true, add:true);
$this->add_right("mail", "queue", "guest", view:true, );

$this->add_right("mail", "signature", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "signature", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "signature", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "signature", "staff", view:true, add:true, edit:true);
$this->add_right("mail", "signature", "registered", view:true, add:true);
$this->add_right("mail", "signature", "guest", view:true, );

$this->add_right("mail", "theme", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "theme", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "theme", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("mail", "theme", "staff", view:true, add:true, edit:true);
$this->add_right("mail", "theme", "registered", view:true, add:true);
$this->add_right("mail", "theme", "guest", view:true, );

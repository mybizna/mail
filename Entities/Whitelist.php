<?php

namespace Modules\Mail\Entities;

use Modules\Base\Entities\BaseModel;
use Modules\Base\Classes\Migration;
use Illuminate\Database\Schema\Blueprint;

class Whitelist extends BaseModel
{

    protected $fillable = ['contact_id'];
    public $migrationDependancy = ['mail_contact'];
    protected $table = "mail_whitelist";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->foreignId('contact_id');
    }

    public function post_migration(Blueprint $table)
    {
        Migration::addForeign($table, 'mail_contact', 'contact_id');
    }
}

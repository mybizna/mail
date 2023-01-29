<?php

namespace Modules\Mail\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Contact extends BaseModel
{

    protected $fillable = ['name'];
    public $migrationDependancy = [];
    protected $table = "mail_contact";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->string('name');
    }
}

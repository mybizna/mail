<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Contact extends BaseModel
{

    protected $fillable = ['name', 'email', 'ordering', 'published'];
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
        $table->char('name', 255);
        $table->char('email', 255);
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}

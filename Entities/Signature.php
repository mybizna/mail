<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Signature extends BaseModel
{

    protected $fillable = ['title', 'signature', 'ordering', 'published'];
    public $migrationDependancy = [];
    protected $table = "mail_signature";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->char('title', 255);
        $table->string('signature');
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}

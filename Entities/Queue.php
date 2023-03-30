<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;

class Queue extends BaseModel
{

    protected $fillable = ['subject', 'body', 'email'];
    public $migrationDependancy = [];
    protected $table = "mail_queue";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->string('subject');
        $table->string('body');
        $table->string('email');
        $table->string('attachment');
    }

}

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
        $table->integer('contact_id');
    }

    public function post_migration(Blueprint $table)
    {
        if (Migration::checkKeyExist('mail_whitelist', 'contact_id')) {
            $table->foreign('contact_id')->references('id')->on('mail_contact')->nullOnDelete();
        }
    }
}

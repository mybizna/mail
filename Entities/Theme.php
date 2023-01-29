<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Theme extends BaseModel
{

    protected $fillable = ['title', 'file_name', 'body', 'is_file', 'is_default'];
    public $migrationDependancy = [];
    protected $table = "mail_theme";

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
        $table->char('file_name', 255);
        $table->string('body')->nullable();
        $table->tinyInteger('is_file')->default(true);
        $table->tinyInteger('is_default')->default(true);

    }

}

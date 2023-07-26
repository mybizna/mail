<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Queue extends BaseModel
{

    protected $fillable = ['subject', 'body', 'email'];
    public $migrationDependancy = [];
    protected $table = "mail_queue";

    public function listTable()
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('subject')->type('text')->ordering(true);
        $fields->name('email')->type('email')->ordering(true);

        return $fields;

    }

    public function formBuilder()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->type('text')->group('w-1/2');
        $fields->name('body')->type('textarea')->group('w-1/2');
        $fields->name('email')->type('email')->group('w-1/2');

        return $fields;

    }

    public function filter()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->type('text')->group('w-1/6');
        $fields->name('email')->type('email')->group('w-1/6');

        return $fields;

    }
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

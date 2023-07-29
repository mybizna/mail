<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;
use Modules\Base\Entities\BaseModel;

class Queue extends BaseModel
{
    /**
     * The fields that can be filled
     * @var array<string>
     */
    protected $fillable = ['subject', 'body', 'email'];

    /**
     * List of tables names that are need in this model during migration.
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = "mail_queue";

    public function listTable(): ListTable
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

    public function filter(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->type('text')->group('w-1/6');
        $fields->name('email')->type('email')->group('w-1/6');

        return $fields;

    }
    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
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

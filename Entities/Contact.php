<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;
use Modules\Base\Entities\BaseModel;

class Contact extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'email', 'ordering', 'published'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mail_contact";

    /**
     * Function for defining list of fields in table view.
     *
     * @return ListTable
     */
    public function listTable(): ListTable
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('name')->type('text')->ordering(true);
        $fields->name('email')->type('email')->ordering(true);
        $fields->name('ordering')->type('text')->ordering(true);
        $fields->name('published')->type('switch')->ordering(true);

        return $fields;

    }

    /**
     * Function for defining list of fields in form view.
     * 
     * @return FormBuilder
     */
    public function formBuilder(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('name')->type('text')->group('w-1/2');
        $fields->name('email')->type('email')->group('w-1/2');
        $fields->name('ordering')->type('text')->group('w-1/2');

        return $fields;

    }

    /**
     * Function for defining list of fields in filter view.
     * 
     * @return FormBuilder
     */
    public function filter(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('name')->type('text')->group('w-1/6');
        $fields->name('email')->type('email')->group('w-1/6');
        $fields->name('ordering')->type('text')->group('w-1/6');

        return $fields;

    }
    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table): void
    {
        $table->increments('id');
        $table->char('name', 255);
        $table->char('email', 255);
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}

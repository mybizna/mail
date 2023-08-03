<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;
use Modules\Base\Entities\BaseModel;

class Signature extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'signature', 'ordering', 'published'];

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
    protected $table = "mail_signature";

    /**
     * Function for defining list of fields in table view.
     *
     * @return ListTable
     */
    public function listTable(): ListTable
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('title')->type('text')->ordering(true);
        $fields->name('signature')->type('text')->ordering(true);
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

        $fields->name('title')->type('text')->group('w-1/2');
        $fields->name('signature')->type('text')->group('w-1/2');
        $fields->name('ordering')->type('text')->group('w-1/2');
        $fields->name('published')->type('switch')->group('w-1/2');

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

        $fields->name('title')->type('text')->group('w-1/6');
        $fields->name('signature')->type('text')->group('w-1/6');
        $fields->name('ordering')->type('text')->group('w-1/6');
        $fields->name('published')->type('switch')->group('w-1/6');

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
        $table->char('title', 255);
        $table->string('signature');
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}

<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;
use Modules\Base\Entities\BaseModel;

class Theme extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'file_name', 'body', 'is_file', 'is_default'];

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
    protected $table = "mail_theme";

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
        $fields->name('file_name')->type('text')->ordering(true);
        $fields->name('body')->type('text')->ordering(true);
        $fields->name('is_file')->type('switch')->ordering(true);
        $fields->name('is_default')->type('switch')->ordering(true);

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
        $fields->name('file_name')->type('text')->group('w-1/2');
        $fields->name('is_file')->type('switch')->group('w-1/2');
        $fields->name('is_default')->type('switch')->group('w-1/2');
        $fields->name('body')->type('textarea')->group('w-full');

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
        $fields->name('file_name')->type('text')->group('w-1/6');
        $fields->name('is_file')->type('switch')->group('w-1/6');
        $fields->name('is_default')->type('switch')->group('w-1/6');

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
        $table->char('file_name', 255);
        $table->string('body')->nullable();
        $table->tinyInteger('is_file')->default(true);
        $table->tinyInteger('is_default')->default(true);

    }

}

<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Theme extends BaseModel
{

    protected $fillable = ['title', 'file_name', 'body', 'is_file', 'is_default'];
    public $migrationDependancy = [];
    protected $table = "mail_theme";

    public function listTable()
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

    public function formBuilder()
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

    public function filter()
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

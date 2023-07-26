<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Contact extends BaseModel
{

    protected $fillable = ['name', 'email', 'ordering', 'published'];
    public $migrationDependancy = [];
    protected $table = "mail_contact";

    public function listTable()
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('name')->type('text')->ordering(true);
        $fields->name('email')->type('email')->ordering(true);
        $fields->name('ordering')->type('text')->ordering(true);
        $fields->name('published')->type('switch')->ordering(true);

        return $fields;

    }

    public function formBuilder()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('name')->type('text')->group('w-1/2');
        $fields->name('email')->type('email')->group('w-1/2');
        $fields->name('ordering')->type('text')->group('w-1/2');

        return $fields;

    }

    public function filter()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('name')->type('text')->group('w-1/6');
        $fields->name('email')->type('email')->group('w-1/6');
        $fields->name('ordering')->type('text')->group('w-1/6');

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
        $table->char('name', 255);
        $table->char('email', 255);
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}

<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Migration;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Whitelist extends BaseModel
{

    protected $fillable = ['contact_id'];
    public $migrationDependancy = ['mail_contact'];
    protected $table = "mail_whitelist";

    public function listTable()
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('contact_id')->type('recordpicker')->table('mail_contact')->ordering(true);

        return $fields;

    }

    public function formBuilder()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('contact_id')->type('recordpicker')->table('mail_contact')->group('w-1/2');

        return $fields;

    }

    public function filter()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('contact_id')->type('recordpicker')->table('mail_contact')->group('w-1/6');

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
        $table->foreignId('contact_id');
    }

    public function post_migration(Blueprint $table)
    {
        Migration::addForeign($table, 'mail_contact', 'contact_id');
    }
}

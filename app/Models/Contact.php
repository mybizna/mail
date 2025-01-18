<?php

namespace Modules\Mail\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Contact extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'email', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mail_contact";


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('name');
        $table->string('email');
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);

    }
}

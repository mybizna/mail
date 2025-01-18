<?php

namespace Modules\Mail\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Queue extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['subject', 'body', 'email'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mail_queue";


    public function migration(Blueprint $table): void
    {

        $table->string('subject');
        $table->string('body');
        $table->string('email');
        $table->string('attachment')->nullable();
    }
}

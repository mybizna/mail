<?php

namespace Modules\Mail\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Signature extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'signature', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mail_signature";


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('title', 255);
        $table->string('signature');
        $table->integer('ordering')->default(10);
        $table->tinyInteger('published')->default(true);
    }
}

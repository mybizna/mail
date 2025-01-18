<?php

namespace Modules\Mail\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Theme extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['title', 'file_name', 'body', 'is_file', 'is_default'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mail_theme";


    public function migration(Blueprint $table): void
    {

        $table->string('title');
        $table->string('file_name');
        $table->text('body')->nullable();
        $table->tinyInteger('is_file')->default(1);
        $table->tinyInteger('is_default')->default(1);

    }
}

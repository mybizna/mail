<?php

namespace Modules\Mail\Models;

use Modules\Base\Models\BaseModel;

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

}

<?php

namespace Modules\Mail\Models;

use Modules\Base\Models\BaseModel;

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

}

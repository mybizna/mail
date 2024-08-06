<?php

namespace Modules\Mail\Entities;

use Modules\Base\Entities\BaseModel;

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

}

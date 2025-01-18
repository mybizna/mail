<?php

namespace Modules\Mail\Models;

use Modules\Base\Models\BaseModel;
use Modules\Mail\Models\Contact;

class Blacklist extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['contact_id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mail_blacklist";

    /**
     * Add relationship to Contact
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }


    public function migration(Blueprint $table)
    {

    }
}

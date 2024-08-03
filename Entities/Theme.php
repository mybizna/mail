<?php

namespace Modules\Mail\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

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

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('hidden');
        $this->fields->char('title', 255)->html('text');
        $this->fields->char('file_name', 255)->html('text');
        $this->fields->string('body')->nullable()->html('textarea');
        $this->fields->tinyInteger('is_file')->default(true)->html('switch');
        $this->fields->tinyInteger('is_default')->default(true)->html('switch');
    }






}

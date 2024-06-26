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
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['title'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

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

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {

        $structure['table'] = ['title', 'file_name', 'is_file', 'is_default'];
        $structure['form'] = [
            ['label' => 'Theme Title', 'class' => 'col-span-full', 'fields' => ['title']],
            ['label' => 'Theme Detail', 'class' => 'col-span-full  md:col-span-6 md:pr-2', 'fields' => ['is_file', 'is_default']],
            ['label' => 'Theme Seting', 'class' => 'col-span-full  md:col-span-6 md:pr-2', 'fields' => ['file_name']],
            ['label' => 'Theme Body', 'class' => 'col-span-full', 'fields' => ['body']],
        ];
        $structure['filter'] = ['title', 'file_name', 'is_file', 'is_default'];

        return $structure;

    }


    /**
     * Define rights for this model.
     *
     * @return array
     */
    public function rights(): array
    {
        $rights = parent::rights();

        $rights['staff'] = ['view' => true];
        $rights['registered'] = ['view' => true];
        $rights['guest'] = [];

        return $rights;
    }

}

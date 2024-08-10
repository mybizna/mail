<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mail_theme', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('file_name');
            $table->text('body')->nullable();
            $table->tinyInteger('is_file')->default(1);
            $table->tinyInteger('is_default')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_theme');
    }
};

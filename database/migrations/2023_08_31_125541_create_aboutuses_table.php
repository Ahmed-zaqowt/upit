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
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->text('text4')->nullable();
            $table->text('text5')->nullable();
            $table->text('text6')->nullable();
            $table->text('text7')->nullable();
            $table->text('text8')->nullable();
            $table->text('text9')->nullable();
            $table->text('text10')->nullable();
            $table->text('text11')->nullable();
            $table->text('text12')->nullable();
            $table->text('text13')->nullable();
            $table->text('text14')->nullable();
            $table->text('text15')->nullable();
            $table->text('text16')->nullable();
            $table->text('text17')->nullable();
            $table->text('image_sec_1')->nullable();
            $table->text('image_sec_2')->nullable();
            $table->text('image_sec_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutuses');
    }
};

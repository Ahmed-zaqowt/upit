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
        Schema::create('indices', function (Blueprint $table) {
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
            $table->text('text18')->nullable();
            $table->text('text19')->nullable();
            $table->text('text20')->nullable();
            $table->text('text21')->nullable();
            $table->text('text22')->nullable();
            $table->text('text23')->nullable();
            $table->text('text24')->nullable();
            $table->text('text25')->nullable();
            $table->text('text26')->nullable();
            $table->text('text27')->nullable();
            $table->text('text28')->nullable();
            $table->text('id_create')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indices');
    }
};

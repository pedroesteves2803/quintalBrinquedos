<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('description_line_one');
            $table->string('description_line_two');
            $table->string('button');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};

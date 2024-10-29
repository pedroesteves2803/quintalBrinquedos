<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('credibility_statements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('description');
            $table->string('title_advantage_one');
            $table->string('subtitle_advantage_one');
            $table->string('title_advantage_two');
            $table->string('subtitle_advantage_two');
            $table->string('title_advantage_tree');
            $table->string('subtitle_advantage_tree');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('credibility_statements');
    }
};

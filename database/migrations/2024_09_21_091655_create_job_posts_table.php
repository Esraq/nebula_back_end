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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('zone_id');
            $table->string('employer_id');
            $table->string('title');
            $table->string('description');
            $table->string('vacancy');
            $table->string('job_type');
            $table->string('salary');
            $table->string('location');
            $table->string('deadline');
            $table->string('job_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};

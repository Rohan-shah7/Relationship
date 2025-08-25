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
        Schema::create('faculty_teachers', function (Blueprint $table) {
            $table->id();


            $table->foreignId("teacher_id")->constrained()->onDelete("cascade");

            $table->foreignId("faculty_id")->constrained()->onDelete("cascade");
            $table->timestamps();

            // Prevent duplicate faculty-teacher pairs
            $table->unique(['faculty_id', 'teacher_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_teachers');
    }
};

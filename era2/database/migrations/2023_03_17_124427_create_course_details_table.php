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
        Schema::create('course_details', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('sub_name')->nullable();
            $table->string('heading');
            $table->string('price');
            $table->string('small_description');
            $table->longText('description');
            $table->string('image');
            $table->boolean('visible')->default(false)->comment('1=visible,0=not visible');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_details');
    }
};

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
        Schema::create('welcome_information', function (Blueprint $table) {
            $table->id();

            $table->string('slogan');
            $table->string('heading');
            $table->string('image');
            $table->string('sub_heading');
            $table->string('extra_information')->nullable();
            $table->boolean('visible')->default(false)->comment('1=visible,0=not visible');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcome_information');
    }
};

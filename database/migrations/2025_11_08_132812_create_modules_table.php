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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('menu_value')->default('Class Room'); 
            $table->boolean('has_sub_route')->default(false); 
            $table->boolean('show_sub_route')->default(false); 
            $table->string('route')->nullable(); 
            $table->string('active_link')->nullable(); 
            $table->json('sub_routes')->nullable(); 
            $table->string('key')->unique();
            $table->string('icon')->nullable();
            $table->integer('sequence')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};

            
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
        Schema::create('sub_modules', function (Blueprint $table) {
            $table->id();
            $table->string('menu_value')->default('All Classes'); 
            $table->string('route')->nullable(); 
            $table->boolean('has_sub_route')->default(false); 
            $table->boolean('show_sub_route')->default(false);
            $table->string('active_link')->nullable(); 
            $table->string('key')->unique();
            $table->integer('sequence');
            $table->foreignId('module_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_modules');
    }
};

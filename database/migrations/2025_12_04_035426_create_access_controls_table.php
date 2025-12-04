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
        Schema::create('access_controls', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("role_id");
            $table->unsignedBigInteger("module_id");
            $table->boolean("permission_id")->default(true);
            $table->unsignedBigInteger("created_by");
            $table->unsignedBigInteger("updated_by");

            $table->foreign('role_id')->references('id')->on('user_groups')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_controls');
    }
};

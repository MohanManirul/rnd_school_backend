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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_office_id');
            $table->integer('ordering');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->enum('blood_grp',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->enum('gender',['Male','Female','Others']);
            $table->enum('religion',['Islam','Hindu','Christian','Budhist','Others']);
            $table->date('date_of_birth');
            $table->enum('marital_status',['Married','Unmarried','Divorced']);
            $table->string('nationality')->default("Bangladeshi");
            $table->integer('nid')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('bank_acc_no')->nullable();
            $table->integer('contact');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};

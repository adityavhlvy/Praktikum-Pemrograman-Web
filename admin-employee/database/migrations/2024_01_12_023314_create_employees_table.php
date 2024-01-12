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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->enum('gender', ['Male', 'Female', 'Alien'])->default('Alien');
            $table->string('id_employee')->unique();
            $table->enum('department', ['AA', 'BB', 'CC', 'DD', 'Alien'])->default('Alien');
            $table->enum('position', ['01', '02', '03', '04', '00'])->default('00');
            $table->integer('work_duration');
            $table->float('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

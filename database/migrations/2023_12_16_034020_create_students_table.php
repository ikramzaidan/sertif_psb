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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('gender');
            $table->string('address_by_idc');
            $table->string('address');
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('religion');
            $table->string('citizenship');
            $table->string('nationality')->default('Indonesia');
            $table->string('marriage_status');
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

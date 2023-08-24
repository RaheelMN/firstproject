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
            $table->integer('st_id')->autoIncrement();
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->integer('age')->comment('age > 20');
            $table->string('address');
            $table->string('phone');
            $table->string('password');
            $table->unsignedBigInteger('city')->nullable();
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

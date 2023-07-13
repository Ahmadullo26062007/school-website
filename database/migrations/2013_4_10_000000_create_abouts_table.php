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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable('nomalum');
            $table->string('image')->nullable('school.png');
            $table->text('description')->nullable('hali malumot to`liq ko`rsatilmagan');
            $table->integer('phone_number')->nullable('aniq emas');
            $table->string('start_time')->nullable('aniq emas');
            $table->string('end_time')->nullable('aniq emas');
            $table->string('viloyat')->nullable('aniq emas');
            $table->string('tuman')->nullable('aniq emas');
            $table->string('facebook')->nullable('aniq emas');
            $table->string('instagram')->nullable('aniq emas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

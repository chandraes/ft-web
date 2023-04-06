<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lab_id')->constrained('labs');
            $table->string('name');
            $table->json('dosen_uji')->nullable();
            $table->json('pengujian')->nullable();
            $table->json('std_pengujian')->nullable();
            $table->json('capaian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_equipment');
    }
};

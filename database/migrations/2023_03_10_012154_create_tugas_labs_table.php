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
        Schema::create('tugas_labs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosens');
            $table->string('tahun')->nullable();
            $table->string('judul')->nullable();
            $table->string('spesialisasi')->nullable();
            $table->string('capaian')->nullable();
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
        Schema::dropIfExists('tugas_labs');
    }
};

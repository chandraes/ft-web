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
        Schema::create('riwayat_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosens');
            $table->string('jenjang_pendidikan')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('tempat_pendidikan')->nullable();
            $table->string('tahun_lulus')->nullable();
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
        Schema::dropIfExists('riwayat_pendidikans');
    }
};

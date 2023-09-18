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
        Schema::table('dosens', function (Blueprint $table) {
            $table->enum('pangkat', ['III/a', 'III/b Penata Muda Tk.I', 'III/c Penata', 'III/d Penata Tk.I', 'IV/a Pembina', 'IV/b Pembina Tk.I', 'IV/c Pembina Utama Muda', 'IV/d Pembina Utama Madya', 'IV/e Pembina Utama'])->nullable();
            $table->enum('jabfung', ['Guru Besar', 'Lektor Kepala', 'Lektor', 'Asisten Ahli', 'Tenaga Pengajar'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dosens', function (Blueprint $table) {
            //
        });
    }
};

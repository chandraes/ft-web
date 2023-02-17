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
            $table->string('gs_link')->after('email')->nullable();
            $table->string('scopus_link')->after('gs_link')->nullable();
            $table->string('sinta_link')->after('scopus_link')->nullable();
            $table->string('wos_link')->after('sinta_link')->nullable();
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

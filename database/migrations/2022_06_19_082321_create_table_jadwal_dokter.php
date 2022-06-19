<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJadwalDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_jadwal_dokter', function (Blueprint $table) {
            $table->id();
            $table->string('waktu');
            $table->foreignId('id_dokter')->references('id')->on('table_dokter');
            $table->foreignId('id_poliklinik')->references('id')->on('table_poliklinik');
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
        Schema::dropIfExists('table_jadwal_dokter');
    }
}
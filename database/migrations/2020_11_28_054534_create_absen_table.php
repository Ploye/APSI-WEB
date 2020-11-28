<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_absen', 10);
            $table->char('nama', 25);
            $table->char('jabatan', 10);
            $table->char('tanggal', 10);
            $table->char('status', 10);
            $table->char('id_pegawai', 10)->index();
            $table->timestamps();

            $table->foreign('id_pegawai')
            ->references('id_pegawai')
            ->on('pegawai')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen');
    }
}

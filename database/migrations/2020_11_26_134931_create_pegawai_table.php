<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->char('id_pegawai', 10)->primary();
            $table->char('nama', 25);
            $table->char('jenis_kelamin', 10);
            $table->bigInteger('no_hp')->length(20)->unsigned();
            $table->char('jabatan', 10);
            $table->char('alamat', 35);
            $table->char('email', 20);
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('id_pegawai')
            // ->references('id_pegawai')
            // ->on('penggajian')
            // ->onUpdate('cascade');

            // $table->foreign('id_pegawai')
            // ->references('id_pegawai')
            // ->on('absen')
            // ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}

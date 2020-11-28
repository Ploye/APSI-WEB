<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajian', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_penggajian', 10);
            $table->char('nama', 25);
            $table->char('jabatan', 15);
            $table->char('tanggal', 20);
            $table->char('status', 10);
            $table->decimal('gaji_pokok', 12, 2);
            $table->integer('jml_tidak_hadir')->length(10)->unsigned();
            $table->decimal('tunjangan', 12, 2);
            $table->decimal('gaji_diterima', 12, 2);
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
        Schema::dropIfExists('penggajian');
    }
}

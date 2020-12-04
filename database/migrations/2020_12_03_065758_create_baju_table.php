<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baju', function (Blueprint $table) {
            $table->increments('id_baju', 10);
            $table->char('kode_baju', 25);            
            $table->char('nama_baju', 25);
            $table->char('bahan', 25);
            $table->char('ukuran', 5);
            $table->char('jenis_baju', 25);
            $table->bigInteger('harga')->length(20)->unsigned();
            $table->char('stok', 10);
            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baju');
    }
}

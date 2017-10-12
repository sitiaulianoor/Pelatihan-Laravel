<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('id_hs')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->string('jenis_transaksi');
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on ('role')->onDelete('cascade');
            $table->foreign('id_hs')->references('id_hs')->on ('homestay')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->enum('statusPecahBelah',['Ya', 'Tidak'] )->default('Tidak');
            $table->tinyInteger('berat')->default('1');
            $table->float('harga', 8,3);
            $table->tinyInteger('panjang')->default('1');
            $table->tinyInteger('lebar')->default('1');
            $table->binary('foto');
            $table->enum('kodeBarang', ['Request', 'Pre Order', 'Ready Stock'])->default('Request');
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
        Schema::dropIfExists('barangs');
    }
}

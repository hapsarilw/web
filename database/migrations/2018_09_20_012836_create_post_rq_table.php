<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostRqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_rq', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang');
            $table->integer('id_user');
            $table->integer('id_pegawai');
            $table->date('waktuPost');
            $table->integer('jumlah');
            $table->string('statusPost');
            $table->date('tglBerakhir');
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
        Schema::dropIfExists('post_rq');
    }
}

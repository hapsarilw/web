<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActRequesterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_requester', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_requester');
            $table->enum('aksi', ['upload post requester', 'melakukan pembayaran', 'komentar pada post']);
            $table->string('postRequester');
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
        Schema::dropIfExists('act_requester');
    }
}

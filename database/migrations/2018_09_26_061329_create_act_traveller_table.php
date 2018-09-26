<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActTravellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_traveller', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_traveller');
            $table->enum('aksi', ['Pergi', 'Pulang', 'Setujui Pembelian']);
            $table->date('tgl');
            $table->string('negara', ['Thailand', 'Jepang', 'Korea', 'Amerika', 'Jerman', 'Swiss', 'Paris']);
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
        Schema::dropIfExists('act_traveller');
    }
}

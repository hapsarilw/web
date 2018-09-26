<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBarang extends Model
{
    protected $table = 'barangs';
    protected $fillable = [
        'nama',
        'statusPecahBelah',
        'berat',
        'panjang',
        'harga',
        'lebar',
        'foto',
        'kodeBarang',

    ];
}

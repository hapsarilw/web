<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelBarang extends Model
{
    use SyncsWithFirebase;
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

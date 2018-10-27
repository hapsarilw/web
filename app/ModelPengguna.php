<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelPengguna extends Model
{
    use SyncsWithFirebase;
    protected $table = "pengguna";
}

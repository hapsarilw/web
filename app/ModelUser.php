<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelUser extends Model
{
    //
    use SyncsWithFirebase;
    protected $table = 'Users';
    protected $fillable = ['email', 'nama', 'is_admin', 'password'];
}

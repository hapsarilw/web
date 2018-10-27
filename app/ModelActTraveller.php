<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelActTraveller extends Model
{
    //
    use SyncsWithFirebase;
    protected $table = 'act_traveller';
}

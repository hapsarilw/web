<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelTraveller extends Model
{
    use SyncsWithFirebase;
    protected $table = 'traveller';
}

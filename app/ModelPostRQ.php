<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelPostRQ extends Model
{
    use SyncsWithFirebase;
    protected $table = 'post_rq';
}

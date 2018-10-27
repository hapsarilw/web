<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelRequester extends Model
{
    use SyncsWithFirebase;
    protected $table = 'requester';
}

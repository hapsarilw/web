<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelActRequester extends Model
{
    use SyncsWithFirebase;
    protected $table = 'act_requester';
}

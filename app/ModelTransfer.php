<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class ModelTransfer extends Model
{
    use SyncsWithFirebase;
    protected $table = 'transfer';
}

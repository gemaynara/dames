<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = true;
    protected $table = 'produtos';
    protected $primaryKey = 'id';
}

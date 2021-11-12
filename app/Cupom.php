<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    public $timestamps = true;
    protected $table = 'cupons';
    protected $primaryKey = 'id';
}

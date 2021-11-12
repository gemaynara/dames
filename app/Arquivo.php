<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    public $timestamps = true;
    protected $table = 'arquivos';
    protected $primaryKey = 'id';
}

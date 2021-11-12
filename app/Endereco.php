<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = true;
    protected $table = 'enderecos';
    protected $primaryKey = 'id';
}

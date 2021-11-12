<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoAvaliacao extends Model
{
    public $timestamps = true;
    protected $table = 'produtos_avaliacoes';
    protected $primaryKey = 'id';
}

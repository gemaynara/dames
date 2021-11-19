<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timestamps = true;
    protected $table = 'marcas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'ativo'
    ];
}

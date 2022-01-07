<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = true;
    protected $table = 'categorias';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'ativo'
    ];

}

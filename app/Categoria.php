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

    public static function getCategorias($limit = null)
    {
        return Categoria::where('ativo', 1)->orderBy("nome", 'asc')
            ->take($limit)->get();
    }
}

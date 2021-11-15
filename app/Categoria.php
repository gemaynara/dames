<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = true;
    protected $table = 'categorias';
    protected $primaryKey = 'id';

    public static function getCategorias(){
        return Categoria::where('ativo', 1)->get();
    }
}

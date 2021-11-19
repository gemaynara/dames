<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = true;
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'distribuidor_id',
        'categoria_id',
        'marca_id',
        'nome',
        'descricao',
        'detalhes',
        'valor',
        'estoque',
        'valor_desconto',
        'qnt_vendida',
        'slug',
        'ativo',
    ];

    public static function getProducts($distrubuidor= null){
       return Produto::where('distribuidor_id', $distrubuidor)
            ->where('ativo', 1)
            ->get();
    }

}

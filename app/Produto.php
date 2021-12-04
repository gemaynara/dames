<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
class Produto extends Model
{
    use Rateable;
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

    public function favorito(){
        return $this->hasMany(ProdutoFavorito::class,'produto_id');
    }

}

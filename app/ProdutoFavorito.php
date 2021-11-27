<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoFavorito extends Model
{
    public $timestamps = true;
    protected  $fillable =[
        'id',
        'user_id',
        'produto_id'
    ];
    protected $table = 'produtos_favoritos';
    protected $primaryKey = 'id';
}

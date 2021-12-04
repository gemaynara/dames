<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoFavorito extends Model
{
    public $timestamps = true;
    protected $table = 'produtos_favoritos';
    protected $primaryKey = 'id';

    protected  $fillable =[
        'user_id',
        'produto_id'
    ];

}

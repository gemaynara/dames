<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoImagens extends Model
{
    public $timestamps = true;
    protected $table = 'produtos_imagens';
    protected $primaryKey = 'id';

    protected $fillable = [
        'produto_id',
        'nome_arquivo',
        'diretorio',
        'formato',
        'tamanho',
        'ativo',
    ];
}

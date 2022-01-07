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
        'diretorio',
        'imagem_principal',
        'ativo',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}

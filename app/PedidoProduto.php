<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    public $timestamps = true;
    protected $table = 'produtos_pedidos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade',
        'valor_unitario',
        'subtotal',
        'desconto',
        'total'
    ];
}

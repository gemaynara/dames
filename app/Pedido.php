<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = true;
    protected $table = 'pedidos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'endereco_id',
        'cupom_id',
        'data_compra',
        'subtotal',
        'desconto',
        'total',
        'status'
    ];
}

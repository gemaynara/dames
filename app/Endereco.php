<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = true;
    protected $table = 'enderecos';
    protected $primaryKey = 'id';
    protected $fillable=[
        "user_id",
        "cep",
        "endereco",
        "numero",
        "complemento",
        "bairro",
        "cidade",
        "estado",
        "tipo_endereco",
        "padrao",
        "ativo",
    ];
}

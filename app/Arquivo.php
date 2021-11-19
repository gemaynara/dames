<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    public $timestamps = true;
    protected $table = 'arquivos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'nome_arquivo',
        'caminho',
        'tamanho',
        'formato'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table      =   'clientes';
    protected $fillable   = [ 'nome'
                            , 'cpf'
                            , 'rg'
                            , 'email'
                            , 'fone1'
                            , 'fone2'
                            , 'nascimento'
                            , 'sexo'
                            , 'cep'
                            , 'rua'
                            , 'numero'
                            , 'complemento'
                            , 'bairro'
                            , 'cidade'
                            , 'uf'
                            ];    
}

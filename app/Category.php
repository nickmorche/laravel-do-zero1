<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Como está sendo utilizado softDeletes no migration.
    // Devemos utilizar essa trend que se chama:
    use SoftDeletes; 
    //Assim esse modelo consegue pegar os métodos
    protected $fillable = [
        'name',
        'image'
    ];
    //Por que não colocamos as outras colunas como created_at,updated_at? Por que os próprios métodos na migration preenchem essas colunas

    //Criamos aqui por que assim conseguimos trabalhar com
    //a biblioteca Carbon. Que interage com datas e tudo mais.
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    //Primeiro criamos o modeo de produtos
    //Depois criamos o relacionamento entre eles.
    public function products()
    {
        return $this->hasMany(Products::class);
    }
    //Não entendeu os relacionamentos? Vai na documentação: laravel eloquent orm relationships
        
}

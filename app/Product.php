<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'exclusive'
    ];

    protected $dates = [
        'deleted_at'
    ];

    // 1o Cria aqui relacionamento Criando relacionamento entre a tabela categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

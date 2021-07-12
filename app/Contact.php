<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Array - quais campos essa tabela irá ter
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}

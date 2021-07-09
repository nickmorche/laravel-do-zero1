<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.category.index');
    }

    /**
     * undocumented function summary
     *
     * Quando entrarmos dentro de uma categoria para ver os produtos, ele irá pegar a variável $slug e
     * irá buscar as informações da categoria(como os produtos) e irá retornar a view
     *
     * @param $slug
     **/
    public function show($slug)
    {
        return view('Site.category.show', ['slug' => $slug]);
        //É assim que você mostra uma view de uma página junto com váriaveis do PHP
    }
}

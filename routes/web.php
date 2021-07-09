<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Site')->group(function () { //Aqui dentro, dessa rota chamada Site vai ter as rotas do site
    //Route::get($uri: '/', action: 'HomeController@index');
    Route::get('/', 'HomeController');
    /*
        Cria uma rota do tipo Get 
        para página inicial('/') do projeto
        E a ação dessa rota vai ser chamar o método invokable dentro do HomeController

        Explicação mais aprofundada no jornal
    */

    Route::get('produtos', 'CategoryController@index');
    /*
        Cria uma rota do tipo Get
        Vai jogar o usuário para a página de produtos
        E vai jogar para o CategoryController no método index
    */
    Route::get('produtos/{slug}','CategoryController@show');
    /*
        A página Categorias irá servir para mostrar as categorias.
        Porém, quando vamos entrar em uma das categórias irá abrir um nova página dos produtos da categoria
        Por isso, colocamos {slug}
        Irá ter categorias como: mouses, monitores, cpus, etc...
        Logo, haverá links como: produtos/mouse, produtos/monitores, produtos/cpu
        Isso é melhor do que: produtos/1, produtos/2, produtos/3,
        Por que fica melhor para o SEO do site.
        O {slug} irá facilitar na hora de linkar estas rotas(mouse, monitores,cpu)
        O slug tem um pacote no projeto laravel
    */

    Route::get('blog','BlogController');

    //Retorna apenas uma view ao acessar um endereço
    Route::view('sobre','site.about.index');
    //Por que utilizar isto? Por que é uma página totalmente estática. Não busca nada no banco, não interage com ele, poha nenhuma.
    
    Route::get('contato','ContactController@index');
    Route::post('contato','ContactController@form'); // Pode ter a mesma rota para a mesma URL de diferentes métodos. Não tem problema
}); 
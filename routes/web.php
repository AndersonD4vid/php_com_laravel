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

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');

Route::get(
    'contato/{nome?}/{categoria_id}',
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 = informação
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); // informa que o parametro precisa ser de 0 a 9, do tipo número. O + indica que precisa ter apenas 1 caractere
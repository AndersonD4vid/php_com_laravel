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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function() { return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes';})->name('site.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('site.fornecedores');
    Route::get('/produtos', function() { return 'Produtos';})->name('site.produtos');
});

Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');

// Primeira maneira de redirecionamento de rotas
// Route::redirect('/rota2','/rota1'); // O 1º parâmetro é o ponto de partida, e o segundo é para onde será redirecionado

// Segunda maneira de redirecionamento de rotas.
Route::get('/rota2', function(){
     return redirect()->route('site.rota1');
})->name('site.rota2');


// Rota de fallback, caso o usuário tente acessar uma rota inexistente, ele cai na rota de fallback onde tem alguma informação
Route::fallback(function () {
    echo '<center> <h1> A rota acessada não existe. <a href="'.route('site.index').'"> Cliqui aqui para ir para tela principal</a> </h1> </center';
});


Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

/*
Route::get(
    'contato/{nome?}/{categoria_id}',
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 = informação
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); // informa que o parametro precisa ser de 0 a 9, do tipo número. O + indica que precisa ter apenas 1 caractere

*/

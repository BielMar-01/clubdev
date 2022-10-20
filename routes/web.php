<?php

use App\Models\Produtos;
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

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/', function () {

    Auth::logout();
//    $produtos = Produtos::all();
//    return view('index',[
//        'produtos' => $produtos
//    ]);
});

Route::get('/logoff', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/produtos', function () {
    $produtos = Produtos::all();
    return view('produtos', [
        'produtos' => $produtos
    ]);
});


//Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtosIndex'])->name('produtos');
Route::get('/produtos/dashboard', [App\Http\Controllers\ProdutosController::class, 'produtosDashboard'])->name('produtos-dashboard');
Route::post('/produtos/create', [App\Http\Controllers\ProdutosController::class, 'create'])->name('produtosCreate');
Route::post('/produtos/edit', [App\Http\Controllers\ProdutosController::class, 'edit'])->name('produtosUpdate');
Route::post('/produtos/delete', [App\Http\Controllers\ProdutosController::class, 'delete'])->name('produtosDelete');


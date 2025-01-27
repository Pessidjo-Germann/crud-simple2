<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produits',ProduitController::class)
    ->only(['index','create','store','show','edit','update','destroy'])
    ->names([
        'index' => 'produits.index',
        'create' => 'produits.create',
        'store' => 'produits.store',
        'show' => 'produits.show',
        'edit' => 'produits.edit',
        'update' => 'produits.update',
        'destroy' => 'produits.destroy',
    ])
;
<?php

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

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::delete('corpoceleste/destroy', 'ProjectController@destroy')->name('project.destroy');
Route::get('corpoceleste/delete','ProjectController@delete')->name('project.delete');
Route::get ('corpoceleste/listagem', 'ProjectController@index')->name('project.index');
Route::get('corpoceleste/create', 'ProjectController@create')->name('project.create');
Route::get('corpoceleste/edit', 'ProjectController@edit')->name('project.edit');
Route::post('corpoceleste/store', 'ProjectController@store')->name('project.store');
Route::put('corpoceleste/update', 'ProjectController@update')->name('project.update');

//Route::get('/login', function(){
   // return 'Login';

//})->name('login'); 

//Route::get('/cadastro', function() {
    //return view('create');
//});

//Route::get('/atualizacao', function() {
   // return 'Atualização de Planeta';
//});

//Route::get('/remocao', function() {
   // return 'Remoção de Planeta';
//});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/corpoceleste', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/welcome', 'HomeController@principal')->name('principal');


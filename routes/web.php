<?php
use App\Producto;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    $productos=Producto::all();
    return view('Welcome',compact("productos"));
});
Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/casa', function () {
    return view('NuevoHome');
});
Route::get('/adminn', function () {
    return view('layouts.admin');
});

//Vistas
Route::view('welcome','welcome')->name('Welcome');
Route::view('/QuienesSomos','QuienesSomos')->name('QuienesSomos');

//Layouts
Route::get('/layouts/admin', 'HomeController@index')->name('home');
Route::get('admin','HomeController@admin')->name("admin");

//Planes
Route::get('planes','planController@index')->name("planes.index");
Route::get("planes/crea","planController@create")->name("planes.create");
Route::post("planes","planController@store")->name("planes.store");
Route::get("planes/{id}/edit","planController@edit")->name("planes.edit");
Route::put("planes/{id}","planController@update")->name("planes.update");
Route::get("planes/delete/{id}","planController@delete")->name("planes.delete");
Route::delete("planes/{id}","planController@destroy")->name("planes.destroy");

// Personas
Route::resource("personas","personaController");
Route::get("personas/delete/{persona}","personaController@delete")->name("personas.delete");
Auth::routes();

// Pagos
Route::resource("pagos","pagoController");
Route::get("pagos/delete/{pago}","pagoController@delete")->name("pagos.delete");
Auth::routes();

// Productos
Route::resource("productos","productoController");
Route::get("productos/delete/{producto}","productoController@delete")->name("productos.delete");
Auth::routes();

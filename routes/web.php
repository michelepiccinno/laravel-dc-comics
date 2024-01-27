<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
  * stampa dati grezzi CON VAR_DUMP
  *//*
Route::get('/', [ComicController::class, "index"])->name("home");
*/


Route::get('/', function () {
    return redirect()->route('comics.index');
})->name("home");;

/*
**rotta CRUD
*/
Route::resource("comics", ComicController::class); 







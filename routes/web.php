<?php

use App\Http\Controllers\ComicController;
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

Route::resource('comics',ComicController::class);

/* Route::get('/', function () {
    return to_route('comics.index');
}); */

/* Route::get('/details/{id}', function ($id) {
    $comics = config('comics_db.comics');
    $store = config('store.data');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        $data =[
            'comic'=> $comic,
            'store'=> $store
        ];
        return view('pages.details',$data);
    } else {
        abort(404);
    }
})->name('pages.details'); */
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


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/prodotti', function () {
    $arrPaste = config('pasta');

    /*
    [
        'type1'  => [
            [],
            [], ...
        ],
        'type2'  => [
            [],
            [],
            [], ...
        ],
        ...
    ]
    */

    $arr_separato = [];
    foreach ($arrPaste as $pasta) {
        if (!isset($arr_separato[$pasta['tipo']])) {
            $arr_separato[$pasta['tipo']] = [];
        }
        $arr_separato[$pasta['tipo']][] = $pasta;
    }
    // dd($arr_separato);

    return view('prodotti', [
        'pageTitle' => 'Prodotti - La Molisana',
        'arrPaste'  => $arr_separato,
    ]);
})->name('prodotti');


Route::get('/news', function () {
    return view('news', [
        'pageTitle' => 'News - La Molisana'
    ]);
})->name('news');


Route::get('/prodotti/{id}', function ($id) {
    // dd(Route::currentRouteName());
    $pasta = null;
    foreach (config('pasta') as $value) {
        if ($value['id'] == $id) {
            $pasta = $value;
            break;
        }
    }

    if ($pasta) {
        return view('prodotto', [
            'pageTitle' => 'Prodotto - La Molisana',
            'pasta'     => $pasta,
        ]);
    } else {
        abort(404);
    }
})->name('prodotto');

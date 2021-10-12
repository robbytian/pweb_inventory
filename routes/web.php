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
    return view('welocme');
});

Route::get('/hello', function () {
    echo "Hello World";
});

Route::get('/name/{name}', function ($nama) {
    return "Hello " . $nama;
});

Route::get('/data/{data?}', function ($data = "Kosong") {
    return "Isi Parameter = " . $data;
});

Route::get('/robby', function () {
    return view('welcome');
});

Route::get('/nama/{name}', function ($name) {
    return 'Hello ' . $name;
})->where('name', '[A-Za-z]+');

Route::get('studiKasus/{nrp}/{nama}', function ($nrp, $nama) {
    return $nrp . ' ' . $nama;
})->where(['nrp' => '[0-9]+', 'nama' => '[A-Za-z]+']);

Route::get('/cekbilangan/{bilangan}', function ($bilangan) {
    if ($bilangan % 2 == 0) {
        return "Bilangan genap";
    } else {
        return "Bilangan ganjil";
    }
});

Route::get('deretBilangan/{bilangan}', function ($bilangan) {
    for ($i = 1; $i <= $bilangan; $i++) {
        if ($bilangan % 2 == 0) {
            if ($i % 2 == 0) {
                echo $i . '<br>';
            }
        } else {
            if ($i % 2 != 0) {
                echo $i . '<br>';
            }
        }
    }
});

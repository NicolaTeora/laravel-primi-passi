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
    $presentation = 'Hello World';
    $my_class = 'Saluti dalla 117!!';
    $list_staff_class = config('list_staff_class');

    //passo la variabile tramite il metodo compact()
    return view('homepage', compact('presentation', 'my_class', 'list_staff_class'));
});

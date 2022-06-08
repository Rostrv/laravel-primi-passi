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
    $msg = '"Hello" Laravel';
    $fullname = 'Rosario Trovato';
    return view('home', compact('msg', 'fullname'));
})->name('home');

Route::get('/others', function () {
    $link = 'https://www.focusjunior.it/content/uploads/site_stored/imgs/0001/023/urlo-munch4.jpg';
    return view('others', compact('link'));
})->name('others');

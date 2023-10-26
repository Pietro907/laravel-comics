<?php

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

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/', function () {
    $nome = 'Pietro';
    $image = './resources/img/dc-logo.png';
    $arrayLink = ['']
    return view('partial.header', compact('nome', 'image'));
});
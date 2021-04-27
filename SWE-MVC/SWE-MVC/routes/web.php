<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin/index');
});

Route::get( '/results',"App\Http\Controllers\\faculty@view")->name('start');
Route::get( '/showFaculty/{id}',"App\Http\Controllers\\faculty@showFaculty")->name('showFaculty');

Route::get( '/results',"App\Http\Controllers\\admin@login")->name('login');
Route::get( '/insert',"App\Http\Controllers\\admin@delete")->name('delete');
Route::get( '/update',"App\Http\Controllers\\admin@update")->name('update');
Route::get( '/delete',"App\Http\Controllers\\admin@delete")->name('delete');

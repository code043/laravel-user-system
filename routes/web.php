<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function() {
    return view('users.index');
});

Route::get('/users/create', function() {
    return view('users.create');
});
Route::get('/users/{id}', function($id) {
    return view('users.info', ['id' => $id]);
});

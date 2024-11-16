<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function() {
    $users = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'username' => 'johndoe',
            'role' => 'admin',
            'email' => 'johndoe@example.com',
            'phone' => '123-456-7890',
            'birth_date' => '1990-01-01',
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'username' => 'janesmith',
            'role' => 'user',
            'email' => 'janesmith@example.com',
            'phone' => '987-654-3210',
            'birth_date' => '1995-05-15',
        ],
    ];
    return view('users.index', ["users" => $users]);
});


Route::get('/users/create', function() {
    return view('users.create');
});
Route::get('/users/{id}', function($id) {
    
        $users = [
            1 => [
                'id' => 1,
                'name' => 'John Doe',
                'username' => 'johndoe',
                'role' => 'admin',
                'email' => 'johndoe@example.com',
                'phone' => '123-456-7890',
                'birth_date' => '1990-01-01',
            ],
            2 => [
                'id' => 2,
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'role' => 'user',
                'email' => 'janesmith@example.com',
                'phone' => '987-654-3210',
                'birth_date' => '1995-05-15',
            ],
        ];
    
        $user = $users[$id] ?? null; 
        if (!$user) {
            abort(404, 'User not found');
        }
   
    return view('users.info', ['user' => $user]);
});

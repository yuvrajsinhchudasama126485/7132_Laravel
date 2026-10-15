<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ['name' => 'Khushi R', 'skill' => 75, 'id' => 1],
        ['name' => 'Khushi B', 'skill' => 50, 'id' => 2],
        ['name' => 'Yashvi', 'skill' => 90, 'id' => 3],
    ];

    return view('ninjas.index', ['ninjas' => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ['id' => $id]);
})->whereNumber('id');

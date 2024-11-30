<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return response()->json([
        'data'=> 'Hello World!',
        'nama'=> 'Pahrijal',
        ]);
});

Route::post('/nama', function (Request $request) {
    $data = $request->nama;
    return response()->json([
        'nama'=> $data,
        ])->setStatusCode(201);
});
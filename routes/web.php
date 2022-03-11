<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiviController;


Route::redirect('/', '/divi');
Route::resources([
    'divi' => DiviController::class,
]);
Route::get('/calculaenvio', function() {
    return view('create');
});

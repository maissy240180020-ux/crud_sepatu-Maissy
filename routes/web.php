<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sepatuController;

Route::get('/', function () {
    return redirect('/sepatu');
});

Route::resource('sepatu', sepatuController::class);
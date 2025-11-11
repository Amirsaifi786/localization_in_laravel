<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 use App\Http\Controllers\LangController;

   Route::get( 'lang/change', [LangController::class, 'change'] )->name( 'change_lang' );
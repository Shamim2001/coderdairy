<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use App\Models\Activity;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::prefix( 'dashboard' )->middleware( 'auth' )->group( function () {
    Route::get( '/', function () {
        return view( 'admin.index' );
    } )->name( 'dashboard' );

    Route::resource('problem', ProblemController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('activity', ActivityController::class);
    Route::resource('solution', SolutionController::class);
} );

require __DIR__ . '/auth.php';

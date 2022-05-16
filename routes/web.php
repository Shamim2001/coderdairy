<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::prefix( 'dashboard' )->middleware( 'auth' )->group( function () {
    Route::get( '/', function () {
        return view( 'admin.index' );
    } )->name( 'dashboard' );

    Route::resource( 'problem', ProblemController::class );
    Route::resource( 'category', CategoryController::class );
    Route::resource( 'activity', ActivityController::class );
    Route::resource( 'solution', SolutionController::class );
    Route::resource( 'tag', TagController::class );

    Route::post( 'ajax/tag/stote', function ( Request $request ) {

        try {
            $tag = Tag::create( [
                'name'    => $request->name,
                'slug'    => Str::slug( $request->name ),
                'user_id' => Auth::id(),
            ] );
            return response()->json( ['tag' => $tag, 'success' => 'Tag Created'] );
        } catch ( \Throwable$th ) {
            //throw $th;
            return response()->json( ['error' => $th->getMessage()] );
        }
    } )->name( 'ajax.tag.store' );

    // Profiles
    Route::get( 'profiles', [ProfileController::class, 'index'] )->name( 'profiles.index' );
    Route::put( 'profiles/update', [ProfileController::class, 'update'] )->name( 'profiles.update' );

    // Search
    Route::get( 'search', [SearchController::class, 'search'] )->name( 'search.search' );


} );

require __DIR__ . '/auth.php';

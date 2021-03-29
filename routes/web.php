<?php

use Illuminate\Support\Facades\Route;

// -- Basic homepage endpoint
Route::get('/', 'PagesController@home');

// -- Albums endpoints
Route::prefix('albums')->group(
    function () {
        Route::get('{id}', 'AlbumsController@view');
    }
);

// -- User endpoints
Route::prefix('users')->group(
    function () {
        Route::get('{id}', 'UsersController@view');
        Route::get('{id}/edit', 'UsersController@edit');
    }
);

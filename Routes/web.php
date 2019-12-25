<?php


Route::prefix('colors')->group(function() {
    Route::post('/', 'ColorController@store')->name('colors.store');
});

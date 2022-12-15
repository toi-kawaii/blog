<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;




Route::group(['namespace' => 'Main'], function() {
    Route::get('/', 'IndexController');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    
    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController');
    });
    
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function() {
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('admin.category.store'); 
        Route::get('/create', 'CreateController')->name('category.create');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/edit/{category}', 'EditController')->name('admin.category.edit');
        Route::patch('{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('{category}', 'DeleteController')->name('admin.category.delete');
    });
});

Auth::routes();

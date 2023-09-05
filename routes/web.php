<?php
//namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function ()
{
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });
    Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function () {
        Route::get('/', 'IndexController');
    });




    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::group(['namespace' => 'Main'], function () {
            Route::get('/', 'IndexController');
        });
        Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
            Route::get('/', 'IndexController')->name('admin.category.index');
            Route::get('/create', 'CreateController')->name('admin.category.create');
            Route::post('/', 'StoreController')->name('admin.category.store');
            Route::get('/{category}', 'ShowController')->name('admin.category.show');
            Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
            Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
            Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
        });
        Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
            Route::get('/', 'IndexController')->name('admin.tag.index');
            Route::get('/create', 'CreateController')->name('admin.tag.create');
            Route::post('/', 'StoreController')->name('admin.tag.store');
            Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
            Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
            Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
            Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
        });
    });
});


Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Кэш очищен.";
});

Auth::routes();



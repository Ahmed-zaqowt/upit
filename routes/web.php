<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\front\homeController::class , 'home'])->name('index');
Route::get('/news', [\App\Http\Controllers\front\homeController::class , 'news'])->name('news');
Route::get('/read_news/{id}', [\App\Http\Controllers\front\homeController::class , 'read_news'])->name('read_news');
Route::get('/clients', [\App\Http\Controllers\front\homeController::class , 'clients'])->name('clients');
Route::get('/maintenance', [\App\Http\Controllers\front\homeController::class , 'maintenance'])->name('maintenance');
Route::get('/about', [\App\Http\Controllers\front\homeController::class , 'about'])->name('about');
Route::get('/solution/{id}', [\App\Http\Controllers\front\homeController::class , 'solution'])->name('solution');
Route::get('/contact', [\App\Http\Controllers\front\homeController::class , 'contact'])->name('contact');
Route::get('/career', [\App\Http\Controllers\front\homeController::class , 'career'])->name('career');
Route::get('/search', [\App\Http\Controllers\front\homeController::class , 'career'])->name('search');

Route::post('/post_contact', [\App\Http\Controllers\front\homeController::class , 'post_contact'])->name('post_contact');

Route::prefix('order')->controller(\App\Http\Controllers\front\orderController::class)->name('order.')->group(function () {
    Route::post('store/{id}' , 'store')->name('store');
    Route::put('delete/{id}' , 'delete')->name('delete');
});


Route::prefix('admin')->middleware('all')->name('admin.')->group(function () {

    Route::get('/' , [\App\Http\Controllers\front\homeController::class , 'dashboard'])->name('dashboard');

    Route::prefix('profile')->controller(\App\Http\Controllers\ProfileController::class)->name('profile.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::put('update/{id}' , 'update')->name('update');
    });

    Route::middleware('editor')->group(function (){
        Route::prefix('home')->controller(\App\Http\Controllers\indexPageController::class)->name('home.')->group(function () {
            Route::get('/', 'home')->name('index');
            Route::post('upload_image', 'upload_image')->name('index_album');
            Route::delete('delete_image/{id}', 'delete_image')->name('delete_index_album');
            Route::post('update_image', 'update_image')->name('update_image');
            Route::post('text', 'text')->name('text');
            Route::post('store', 'store')->name('store');
        });

        Route::prefix('about')->controller(\App\Http\Controllers\aboutController::class)->name('about.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('store', 'store')->name('store');
        });

        Route::prefix('solution')->controller(\App\Http\Controllers\solutionController::class)->name('solution.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('store', 'store')->name('store');
            Route::post('update', 'update')->name('update');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update_page/{id}', 'update_page')->name('update_page');
            Route::delete('delete/{id}', 'delete')->name('delete');
        });


        Route::prefix('news')->controller(\App\Http\Controllers\newController::class)->name('news.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('store', 'store')->name('store');
            Route::post('update', 'update')->name('update');
            Route::delete('delete/{id}', 'delete')->name('delete');
            Route::get('getdata', 'getdata')->name('getdata');
        });

        Route::prefix('client')->controller(\App\Http\Controllers\clientController::class)->name('client.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('store', 'store')->name('store');
            Route::post('update', 'update')->name('update');
            Route::delete('delete/{id}', 'delete')->name('delete');
        });



    });

    Route::prefix('admin')->controller(\App\Http\Controllers\adminController::class)->name('admin.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::delete('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('partner')->controller(\App\Http\Controllers\partnerController::class)->name('partner.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::delete('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('service')->controller(\App\Http\Controllers\serviceController::class)->name('service.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::delete('delete/{id}', 'delete')->name('delete');
        Route::get('getdata', 'getdata')->name('getdata');
    });

    Route::prefix('store')->controller(\App\Http\Controllers\storeController::class)->name('store.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::delete('delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('feature')->controller(\App\Http\Controllers\featureController::class)->name('feature.')->group(function () {
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::delete('delete/{id}', 'delete')->name('delete');
        Route::get('getdata/{id}', 'getdata')->name('getdata');
    });

    Route::middleware('future')->group(function (){

        Route::prefix('contact')->controller(\App\Http\Controllers\contactController::class)->name('contact.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('contact' , 'contact')->name('contact');
            Route::post('store' , 'store')->name('store');
            Route::post('update' , 'update')->name('update');
            Route::delete('delete/{id}', 'delete')->name('delete');
            Route::delete('destroy/{id}', 'destroy')->name('destroy');
            Route::get('getdata', 'getdata')->name('getdata');
            Route::get('getdata_contact', 'getdata_contact')->name('contact.getdata');
        });

        Route::prefix('order')->controller(\App\Http\Controllers\orderController::class)->name('order.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('update', 'update')->name('update');
            Route::get('getdata', 'getdata')->name('getdata');
        });

        Route::prefix('career')->controller(\App\Http\Controllers\careerController::class)->name('career.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('store', 'store')->name('store');
            Route::post('update', 'update')->name('update');
            Route::delete('delete/{id}', 'delete')->name('delete');
            Route::get('getdata', 'getdata')->name('getdata');
        });

        Route::prefix('vacant')->controller(\App\Http\Controllers\vacantController::class)->name('vacant.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/getdata', 'getdata')->name('getdata');
            Route::post('store/{id}', 'store')->name('store');
            Route::delete('delete/{id}', 'delete')->name('delete');
        });

    });


});


require __DIR__.'/auth.php';

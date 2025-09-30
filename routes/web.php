<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', function () {
    $data1 = 'About us - Online Store';
    $data2 = 'About us';
    $description = 'This is an about page ...';
    $author = 'Developed by: Juan José Gómez';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);

})->name('home.about');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/contact', function () {
    $title = 'Contact - Online Store';
    $email = 'contact@onlinestore.com';
    $address = 'Medellín, Colombia';
    $phone = '+57 300 123 4567';

    return view('home.contact')
        ->with('title', $title)
        ->with('email', $email)
        ->with('address', $address)
        ->with('phone', $phone);
})->name('home.contact');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name('cart.removeAll');
Route::get('/image', 'App\Http\Controllers\ImageController@index')->name('image.index');
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name('image.save');
Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name('imagenotdi.index');
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name('imagenotdi.save');

// ROUTES EXAM 1:
Route::get('/pilots', 'App\Http\Controllers\PilotController@index')->name('pilot.index');
Route::get('/pilots/create', 'App\Http\Controllers\PilotController@create')->name('pilot.create');
Route::post('/pilots/save', 'App\Http\Controllers\PilotController@save')->name('pilot.save');
Route::get('/pilots/statistics', 'App\Http\Controllers\PilotController@statistics')->name('pilot.statistics');

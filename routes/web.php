<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'products' => config('db.products')
    ];

    //dd(config('db.products'));
    return view('home', $data);
})->name('home');

Route::get('/products', function () {
    return redirect()->route('home');
});

Route::get('/products/{id}', function ($id) {

    $products = config('db.products');
    if ($id >= 0 && $id < count($products)) {
        $product = $products[$id];
        return view('products.show', compact('product'));
    } else {
        abort('404');
    }
    //dd(config('db.pro ducts'));

})->name('products.show');


Route::get('/recipes', function () {
    return view('recipes.index');
})->name('recipes.index');
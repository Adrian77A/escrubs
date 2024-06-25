<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowBlogController;
use App\Livewire\Home\Home;
use App\Livewire\Product\Product;
use App\Livewire\Product\ShowProduct;
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

Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('/product/{post}', [HomeController::class , 'show'])->name('product_see');


Route::get('/shopping-card', function () {
    return view('shoping.card');
})->name('shoping_card');


Route::get('/blog', function () {
    return view('information.index');
})->name('blog_information');


Route::get('/ver-blog/{slug}', [ShowBlogController::class , 'index'])->name('blog_information_show');


Route::get('/nosotros', function () {
    return view('about.index');
})->name('about_us');

Route::get('/productos', Product::class)->name('product');

Route::get('/review', function () {
    return view('information.review');
})->name('review');

// catalogos
Route::get('/catalogo/amber/2023', function () {
    return view('catalogs.amber');
})->name('catalog_amber');

Route::get('/catalogo/estetos/2024', function () {
    return view('catalogs.estetos');
})->name('catalog_estetos');

Route::get('/catalogo/enfermedic/2024', function () {
    return view('catalogs.enfermedic');
})->name('catalog_enfermedic');
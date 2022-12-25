<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [FirstController::class, 'index'])->name('main');

Route::get('catalog', [CatalogController::class, 'catalog']);
Route::get('catalog/{category}/{product}', [CatalogController::class, 'product']);
Route::get('catalog/{category}', [CatalogController::class, 'category']);

Route::post('/add_to_cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/show', [CartController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('categories', CategoryController::class)->except('show');
});

Route::resource('products', ProductController::class);

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::middleware('auth')->resource('feedback', FeedbackController::class)->except('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

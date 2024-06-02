<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CartController;
use  App\Http\Controllers\WishListController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\Checkuser;
use App\Http\Controllers\IndexController;
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
    return view('welcome');
});

Route::post('/authenticateAndCheck',[EcommerceController::class,'authenticateAndCheck']);

Route::post('/loginpass',[LoginController::class,'loginpass']);

Route::get('/register',[LoginController::class,'register1']);

Route::post('/update',[LoginController::class,'register2']);

Route::get('/login',[LoginController::class,'login'])->name('login');



Route::get('/blog',[EcommerceController::class,'blog']);

Route::get('/checkout',[EcommerceController::class,'checkout']);

Route::get('/index',[EcommerceController::class,'index']);

Route::get('/regular',[EcommerceController::class,'regular']);

// Route::get('/shop',[EcommerceController::class,'shop']);

Route::get('/single',[EcommerceController::class,'single']);

Route::get('/product',[EcommerceController::class,'product']);

Route::get('/contact',[EcommerceController::class,'contact']);



Route::get('/additem',[EcommerceController::class,'additem']);

Route::post('/additemss',[EcommerceController::class,'addeditem']);

Route::post('/postdata',[EcommerceController::class,'postdata']);

Route::get('/addproduct',[EcommerceController::class,'addproduct']);

Route::post('//addproduct',[EcommerceController::class,'addelement']);

Route::get('/additem',[EcommerceController::class,'showele']);

Route::get('/shop',[EcommerceController::class,'showbrand']);

Route::post('/shop',[EcommerceController::class,'postdata']);

Route::get('/send',[MailController::class,'mail']);

Route::post('/getcart',[CartController::class,'addtocart']);

Route::get('/wishlist',[WishListController::class,'wishlist']);

Route::post('/wishlistpost',[WishListController::class,'wishlistpost']);

Route::post('/wishlistdone',[WishListController::class,'whishlistfns']);

Route::post('/postcheckoutdata',[CheckOutController::class,'checkoutdata'])->name('checkoutdata');

Route::post('/displaydata',[CartController::class,'cartdisplay']);

Route::post('/cancel',[CartController::class,'cartdel']);

Route::post('/total',[CartController::class,'cartotal']);


Route::post('//getcheckout',[CheckOutController::class,'checkout']);

Route::post('/postindexdata',[IndexController::class,'showdata']);


Route::post('/logout',[LoginController::class,'logout']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


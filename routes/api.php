<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/***** Category *****/
Route::get('/categories',[CategoryController::class,'getall']);

Route::post('/AddCategory',[CategoryController::class,'store']);

Route::post('/UpdateCategory/{id}',[CategoryController::class,'update']);

Route::delete('/deleteCategory/{id}',[CategoryController::class,'destroy']);

Route::get('/showCategory/{id}',[CategoryController::class,'show']);

/***** Product *****/
Route::get('/products',[ProductController::class,'getall']);

Route::get('/CategoryProducts/{categoryid}',[ProductController::class,'getCategoryProduct']);

Route::post('/addProduct',[ProductController::class,'store'])->name('store-product');

Route::post('/updateProduct/{id}',[ProductController::class,'update'])->name('update-product');

Route::delete('/deleteProduct/{id}',[ProductController::class,'destroy'])->name('delete-product');

Route::get('/showProduct/{id}',[ProductController::class,'show']);

/***** Order *****/
Route::post('/addOrder',[OrderController::class,'store']);

Route::post('/updateOrder/{id}',[OrderController::class,'update']);

Route::delete('/deleteOrder/{id}',[OrderController::class,'destroy']);

Route::get('/showOrder/{id}',[OrderController::class,'show']);

Route::get('/AcceptOrder/{orderid}',[OrderController::class,'AcceptOrder']);

Route::get('/RejectOrder/{orderid}',[OrderController::class,'RejectOrder']);

/***** Offer *****/
Route::post('/addOffer',[OfferController::class,'store']);

Route::post('/updateOffer/{id}',[OfferController::class,'update']);

Route::delete('/deleteOffer/{id}',[OfferController::class,'destroy']);

Route::get('/showOffer/{id}',[OfferController::class,'show']);

/***** Order Detail *****/
Route::get('/OrderDetail/{orderid}',[OrderDetailController::class,'getOrderDetail']);

Route::post('/MakeOrder/{clientid}',[OrderDetailController::class,'MakeOrder']);

Route::post('/addOrderDetail',[OrderDetailController::class,'store']);

Route::post('/updateOrderDetail/{id}',[OrderDetailController::class,'update']);

Route::delete('/deleteOrderDetail/{id}',[OrderDetailController::class,'destroy']);

Route::get('/showOrderDetail{id}',[OrderDetailController::class,'show']);

######################################## TESTING #################################################

Route::get('/testsavingimage',function(){
    return view('testimage');
})->name('start');
Route::get('/editimage/{id}',[ProductController::class,'edit'])->name('edit');

Route::get('/index',[ProductController::class,'index'])->name('products');

Route::get('/testsavingimage',function(){
    return view('testimage');
})->name('start');
Route::get('/editimage',function(){
    return view('edit');
})->name('edit');
Route::get('/index',[ProductController::class,'index']);

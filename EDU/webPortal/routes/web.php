<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\SupplyAdminController;
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

Route::get('/',[PagesController::class,'index']);
Route::post('/login',[PagesController::class,'login']);
Route::get('/home',[PagesController::class,'home']);
Route::get('/supplier',[SupplyAdminController::class,'home']);
Route::get('/supplier/home',[SupplyAdminController::class,'home']);
Route::get('/supplier/create',[SupplyAdminController::class,'create']);
Route::post('/supplier/create',[SupplyAdminController::class,'createPost']);
Route::get('/supplier/edit',[SupplyAdminController::class,'edit']);
Route::post('/supplier/edit',[SupplyAdminController::class,'editPost']);

Route::get('/about', function(){
    return '<h1>About Page</h1>';
});

Route::get('/contact', function(){
    return '<h1>Contact Page</h1>';
});


// Route::get('/store', function(){
//     $category = request('category');
//     if(isset($category)){
//         return 'you are vewing the store for '. strip_tags($category);
//     }
//     return 'you are vewing all store ';
// });

Route::get('/store/{category?}/{item?}', function($category=null, $item=null){

    if(isset($category)){
        if(isset($item)){
            return "you are vewing the store for {$category} for {$item}";
        }
        return 'you are vewing the store for '. strip_tags($category);
    }
    return 'you are vewing all store ';
});

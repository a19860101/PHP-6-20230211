<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
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
// Route::get('/about/{id}',[AboutController::class,'test']);
// Route::get('/about',[App\Http\Controllers\AboutController::class,'test']);
// Route::get('/about/{id}',function($id){
    // return view('about')->with(['aid' => $id]);
    // return view('about',['aid' => $id]);
    // return view('about',compact('id'));
    // compact('id') = ['id' => $id]
    // return $id;
    // return view('about')->with([
    //     'msg' => '哈囉你好嗎!',
    //     'id' => $id
    // ]);
// });


// Route::get('/contact',function(){
//     return view('contact');
// });
// Route::post('/store',function(Request $request){
    // return dd($request);
    // return dd($request->all());
    // return $request->phone;
// });
// Route::post('/store',[ContactController::class,'store']);

//舊版寫法
// Route::get('/about','AboutController@test');
// Route::post('/store','ContactController@store');

/*
    執行migration: php artisan migrate
    查看狀態: php artisan migrate:status
    重置migration: php artisan migrate:reset
    回上一步migration: php artisan migrate:rollback
    建立migration: php artisan make:mitration create_posts_table

*/
Route::get('/post',[App\Http\Controllers\PostController::class,'index']);
Route::get('/post/create',[App\Http\Controllers\PostController::class,'create']);
Route::post('/post',[App\Http\Controllers\PostController::class,'store']);
Route::get('/post/{id}',[App\Http\Controllers\PostController::class,'show']);
Route::delete('/post/{id}',[App\Http\Controllers\PostController::class,'destroy']);
Route::get('/post/{id}/edit',[App\Http\Controllers\PostController::class,'edit']);
Route::put('/post/{id}',[App\Http\Controllers\PostController::class,'update']);


<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;

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
Route::get('/about/{id}',[AboutController::class,'test']);
// Route::get('/about',[App\Http\Controllers\AboutController::class,'test']);

//舊版寫法
// Route::get('/about','AboutController@test');
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


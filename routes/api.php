<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
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
Route::get('user', function()
{
    return 'get request';
});
Route::post('user', function ( Request $request) {
    // $data=$request->all();
    //  return response()->json(["data"=>"get request"], 200);;
    $data=$request->input("name");
    return response()->json($data, 201);
});
Route::delete('user', function () {
    return 'delete request';
});
Route::post('createUser', UserController::class. '@createUser');
Route::post('article', ArticleController::class. '@createArticle');
Route::post('post', PostController::class. '@publish')->middleware('auth:sanctum');
Route::get('post', PostController::class. '@getPost');
Route::get('post/{id}', PostController::class. '@getPostById');
Route::delete('post/{id}',PostController::class. '@deletePostById' );
Route::put('post/{id}', PostController::class. '@updatePostById');
Route::post('register', UserController::class. '@register');
Route::post('login', UserController::class. '@login');


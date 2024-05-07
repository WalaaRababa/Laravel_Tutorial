<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Middleware\IsLoggingUser;


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

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return ('<h1> hello</h1>');

});

Route ::get('/home',function(){
$name='john';
$age=15;
$students=['ali','ammar','omar','john'];
return view('welcome')->with('passedName',$name)->with('age',$age)->with('Names',$students);
});
Route::get('/booking',BookingController::class . '@myFunction' );
Route::get('/sayHello/{name}',BookingController::class . '@sayHello' );
Route::get('/login/{user}',BookingController::class . '@login')->middleware(IsLoggingUser::class);


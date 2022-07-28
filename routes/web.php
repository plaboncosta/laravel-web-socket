<?php

use Illuminate\Support\Facades\Route;
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

Route::post('/send-message', function (Request $request) {
    $message = $request->input('message');
    event(new \App\Events\TestEvent($message));

    return redirect('/');
});

Route::get('/get-message', function () {
    return view('message');
});

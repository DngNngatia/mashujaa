<?php

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

Route::get('/happy-mashujaa-day', function () {
    return view('welcome');
});
Route::post('/share',function (\Illuminate\Http\Request $request){
    $name = $request->input('name','Kenya');
    return view('share',compact('name'));
});

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

Route::get('/', function () {
    $bien='VietPro';
    $giatri='1';
    return view('welcome',compact('bien','giatri'));
});

//Route::get('/xin-chao/{ten}/{tuoi}', function ($ten, $namsinh){
//   return "Chao ban: " .$ten. '<br>Co nam sinh la :'. $namsinh;
//})-> where(['ten' => '[a-z]+','tuoi'=>'[0-9]+']);

Route::prefix('nhom')->group(function (){
   route::get('nhom1',function (){return "I am in group1";});
    route::get('nhom2',function (){return "I am in group2";});
});

Route::get( 'login' ,'MyController@GetLogin');
Route::post( 'login' ,'MyController@PostLogin');
Route::get( 'demo' ,'MyController@Demo');
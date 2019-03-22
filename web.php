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
    return view ('welcom');
});
 


Route::get('/halo', function () {
    return "hello !!! welcome";
});


Route::get('/show/{id}', function ($id) {
    return "Nilai Parameter Adalah :".$id;
});

Route::get('/show/{id?}', function ($id=1) {
    return "Nilai Parameter Adalah :".$id;
});

route::get('/post', 'PostController@index'); 
route::get('post/{id}' , ['as'=> 'post.detail', function($id){
echo "post $id";
echo "</br>";
echo "body post in ID $id";
}]);

Route::get('/edit/{nama}', function ($nama) {
	return "nama saya adalah : " .$nama;
}) ->where('nama','[A-Za-z]+');

route::get('/index', function(){
	return "<a href= '" .route('create')."'> akses route dengan nama </a?";
});

route::get('/create', function () {
	return "route diakses menggunakan nama";

}) ->name('create');



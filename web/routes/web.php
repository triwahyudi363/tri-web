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
route::resource('/produk', 'produkController');
route::get('/file', function(){
	return view ('file.home');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/base', function () {
    return view('base');
});
Route::get('/halaman-dua', function () {
    return view('halamandua');
});

Route::get('/welcome', function () {
    echo "welcome";
});

Route::get('/index', function () {
    echo "uji coba method get";
});
 
Route::get('/edit/{nama}', function ($nama) {
	echo "nama saya adalah : " .$nama;
}) ->where('nama','[A-Za-z]+');

route::get('/post', 'PostController@index'); 
route::get('post/look', 'PostController@look'); 

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
route::get('/post/show', 'PostController@show');
route::get('/post/look', 'PostController@look');
route::get('/pelanggan', 'pelangganController@index');

route::get('/index', function(){
	echo "<a href= '" .route('create')."'> akses route dengan nama </a?";
});

route::get('/create', function () {
	echo "route diakses menggunakan nama";

}) ->name('create');


Route::get('/halaman',function(){
$title = 'Harry Pooter'; 
$content = 'harry potter and the deathly hallows: part 2';
return view('content.halaman',compact('title','content')); 
}); 


Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/single-post', function () {
    return view('single-post');
});
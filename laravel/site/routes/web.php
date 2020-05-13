<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oi', function () {
    return 'oi mundo';
});

Route::get('/ola/{nome?}/{idade?}', function($nome=null,$idade=null){
    if (isset($nome)){
        return 'Olá '.$nome.' <br>'.$idade.' <br>';
    } else {
        return 'Olá anônimo';
    }
});

Route::get('/rotascomregras/{nome}/{n}',
    function($nome, $n){
        for($x=0;$x<$n;$x++){
            echo "Olá $nome <br>";
        }
    })->where('nome','[A-Za-z]+')
    ->where('n','[0-9]+');

Route::prefix('/app')->group(function(){
    Route::get('/', function () {
        return 'app';
    })->name('app');
    Route::get('/user', function () {
        return 'user';
    })->name('app.user');
    Route::get('/profile', function () {
        return 'profile';
    })->name('app.profile');
});

Route::redirect('bla', '/app', 301);

Route::get('bla1', function() {
    return redirect()->route('app');
});

Route::put('bla2', function() {
    return redirect()->route('app');
});

Route::any('teste1', function () {
    return 'Teste mesmo';
});

Route::match([ 'get', 'post'], '/teste2', function () {
    return 'Teste mesmo 2';
});
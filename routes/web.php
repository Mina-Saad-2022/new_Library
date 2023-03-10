<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BOOK_Controller ;

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



Route::get('/',[BOOK_Controller::class,'home_page']);

Route::group(['namespace'=>'Book','prefix'=>'Book'],function (){
    Route::get('/home-page',[BOOK_Controller::class,'index'])->name('home');




});

Route::get('/All Books',[BOOK_Controller::class,'all_data'])->name('all_books');


Route::get('/Books/{id}',[BOOK_Controller::class,'one_data'])->name('book');




//Route::get('/books','BOOK_Controller@index');


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BOOK_Controller extends Controller
{
    public function home_page(){
        return redirect(route('home'));
    }

    public function index(){
        return view('welcome');
    }


    public function all_data(){
       $books = Book::all();
        return view('show_all_data',compact('books'));

    }

    public function one_data($id){
        $books = Book::findOrFail($id);
        return view('show_one_data',compact('books'));


    }



}

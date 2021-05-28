<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HelloController extends Controller
{
    public function index () 
    {

        $book = new Book();
        $book->title = 'hoge';
        $book->author = 'tarou';
        $saveBook = $book->save();

var_dump(route('register'));
        
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('index', compact('hello', 'hello_array'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Hire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $bookList = \Illuminate\Support\Facades\DB::table('book')
            ->select('book.id','bookName','bookCode','bookDescription','bookState','pageCount','price','categoryName','fullName')
            ->join('author','author.id','=','book.authorId')
            ->join('category','category.id','=','book.categoryId')
            ->get();

        return view('/user/book/book',compact('bookList'));

    }

    public function mybook(){
        $currentBookList = DB::table('hire')
            ->select('hire.id','bookId','bookName','authorId','fullName','categoryId','categoryName','date','hireState')
            ->join('book','book.id','=','hire.bookId')
            ->join('author','author.id','=','book.authorId')
            ->join('category','category.id','=','book.categoryId')
            ->where('userId', '=',auth()->id())
            ->where('hireState','=','Kirada')->get();



        $pastBookList = DB::table('hire')
            ->select('bookId','bookName','authorId','fullName','categoryId','categoryName','date','hireState')
            ->join('book','book.id','=','hire.bookId')
            ->join('author','author.id','=','book.authorId')
            ->join('category','category.id','=','book.categoryId')
            ->where('userId', '=',auth()->id())
            ->where('hireState','=','Teslim Edildi')->get();

        return view('/user/mybook/mybook', compact('currentBookList','pastBookList'));
    }
}

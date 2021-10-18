<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
//
            $bookList = DB::table('book')
                ->select('book.id','bookName','bookCode','bookDescription','bookState','pageCount','price','categoryName','fullName')
                ->join('author','author.id','=','book.authorId')
                ->join('category','category.id','=','book.categoryId')
                ->get();

        $authorList = Author::all();
        $categoryList = Category::all();

        return view('/admin/book/index', compact('bookList','authorList', 'categoryList'));
    }
    public function add(Request $request){
        $request->validate([
            'bookName'=>'required|min:3',
            'bookCode'=>'required',
            'bookDescription'=>'required',
            'pageCount'=>'required',
            'price'=>'required',
            'categoryId'=>'required',
            'authorId'=>'required',
        ]);
        $book = new Book;
        $book->bookName=$request->input('bookName');
        $book->bookCode=$request->input('bookCode');
        $book->bookDescription=$request->input('bookDescription');
        $book->pageCount=$request->input('pageCount');
        $book->price=$request->input('price');
        $book->categoryId=$request->input('categoryId');
        $book->authorId=$request->input('authorId');
        $book->bookState='Mevcut';

        $book->save();
        return redirect('/');
    }
    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        return redirect('book/index');
    }
    public function update($id){
        $book = Book::find($id);
        $authorList = Author::all();
        $categoryList = Category::all();
        return view('/admin/book/update',compact('book','authorList','categoryList'));
    }
    public function updatepost(Request $request,$id){
        $book = Book::find($id);
        $book->bookName=$request->input('bookName');
        $book->bookCode=$request->input('bookCode');
        $book->bookDescription=$request->input('bookDescription');
        $book->pageCount=$request->input('pageCount');
        $book->price=$request->input('price');
        $book->categoryId=$request->input('categoryId');
        $book->authorId=$request->input('authorId');
        $book->save();
        return redirect('book/index');
    }
}

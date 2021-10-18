<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Hire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HireController extends Controller
{
    public function index(){
        $hireList = DB::table('hire')
            ->select('hire.id', 'users.fullName as userName','bookId','bookName','authorId','author.fullName','categoryId','categoryName','date','hireState')
            ->join('users','users.id','=','hire.userId')
            ->join('book','book.id','=','hire.bookId')
            ->join('author','author.id','=','book.authorId')
            ->join('category','category.id','=','book.categoryId')
            ->get();

        return view('admin/hire/index', compact('hireList'));
    }
    public function add($bookId){
        $hire = new Hire;
        $hire->userId = auth()->id();
        $hire->bookId = $bookId;
        $hire->date = now();
        $hire->hireState = 'Kirada';

        $book = Book::find($bookId);
        $book->bookState = 'Mevcut Degil';

        $book->save();
        $hire->save();
        return redirect('/book');
    }
    public function delete($id){
        $hire = Hire::find($id);
        $hire->delete();
        return redirect('/hire/index');
    }
    public function update($id){
            $hire = Hire::find($id);
            $hire->hireState = 'Teslim Edildi';
            $hire->save();

            $book = Book::find($hire->bookId);
            $book->bookState = 'Mevcut';
            $book->save();

            return redirect('/mybook');
    }

}

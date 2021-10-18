<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authorList = Author::all();
        return view('admin/author/index', compact('authorList'));
    }
    public function add(Request $request){
        $request->validate([
            'fullName'=>'required|min:3',
            'birthDate'=>'required',
        ]);
        $author = new Author;
        $author->fullName=$request->input('fullName');
        $author->birthDate=$request->input('birthDate');
        $author->dateOfDeath=$request->input('dateOfDeath');
        $author->age=$request->input('age');

        $author->save();
        return redirect('/');
    }
    public function delete($id){
        $author = Author::find($id);
        $author->delete();
        return redirect('author/index');
    }
    public function update($id){
        $author = Author::find($id);
        return view('/admin/author/update', compact('author'));
    }
    public function updatepost(Request $request,$id){
        $author = Author::find($id);

        $author->fullName=$request->input('fullName');
        $author->birthDate=$request->input('birthDate');
        $author->dateOfDeath=$request->input('dateOfDeath');
        $author->age=$request->input('age');

        $author->save();
        return redirect('author/index');
    }
}

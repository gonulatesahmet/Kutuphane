<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categoryList = Category::all();
        return view('/admin/category/index', compact('categoryList'));
    }
    public function add(Request $request){
        $request->validate([
            'categoryName'=>'required',
        ]);
        $category = new Category;
        $category->categoryName=$request->input('categoryName');
        $category->categoryCode=$request->input('categoryCode');
        $category->categoryDescription=$request->input('categoryDescription');
        $category->categoryState='Aktif';
        $category->save();
        return redirect('/');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('category');
    }
    public function update($id){
        $category = Category::find($id);
        return view('/admin/category/update', compact('category'));
    }
    public function updatepost(Request $request,$id){
        $category = Category::find($id);

        $category->categoryName=$request->input('categoryName');
        $category->categoryCode=$request->input('categoryCode');
        $category->categoryDescription=$request->input('categoryDescription');
        $category->categoryState=$request->input('categoryState');

        $category->save();
        return redirect('category/index');
    }
}

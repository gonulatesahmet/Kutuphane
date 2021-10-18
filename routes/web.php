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


    Route::get('/user', function (){
        $bookList = \Illuminate\Support\Facades\DB::table('book')
            ->select('book.id','bookName','bookCode','bookDescription','bookState','pageCount','price','categoryName','fullName')
            ->join('author','author.id','=','book.authorId')
            ->join('category','category.id','=','book.categoryId')
            ->where('bookState','=','Mevcut')
            ->get();
        return view('user/index',compact('bookList'));
    })->middleware(['auth', 'role:user'])->name('user');
    Route::get('/admin', function (){
        $categorylist = \App\Models\Category::all();
        $authorlist = \App\Models\Author::all();
        return view('admin/index', compact('categorylist', 'authorlist'));
    })->middleware('auth', 'role:Admin')->name('admin');

    Route::get('/', function (){
        if(auth()->check() && auth()->user()){
            if(auth()->user()->userType == 'Admin'){
                $categorylist = \App\Models\Category::all();
                $authorlist = \App\Models\Author::all();
                return view('admin/index', compact('categorylist', 'authorlist'));
            }
            if(auth()->user()->userType == 'user'){
                $bookList = \Illuminate\Support\Facades\DB::table('book')
                    ->select('book.id','bookName','bookCode','bookDescription','bookState','pageCount','price','categoryName','fullName')
                    ->join('author','author.id','=','book.authorId')
                    ->join('category','category.id','=','book.categoryId')
                    ->where('bookState','=','Mevcut')
                    ->get();

                return view('user/index',compact('bookList'));
            }
        }
        else{
            $totalUser = \App\Models\User::all()->count();
            $totalHire = \App\Models\Hire::all()->count();
            $totalBook = \App\Models\Book::all()->count();
            $topUser = \Illuminate\Support\Facades\DB::table('hire')
                ->select('users.fullName', \Illuminate\Support\Facades\DB::raw('COUNT(userId) as count'))
                ->where('hireState','=','Teslim Edildi')
                ->join('users','users.id','=','hire.userId')
                ->groupBy('userId')
                ->orderByDesc('userId')
                ->limit(1)->get();
            return view('welcome', compact('totalUser', 'totalHire', 'totalBook','topUser'));
        }
    });

//ADMIN

    Route::post('/authoradd', [\App\Http\Controllers\AuthorController::class,'add'])->middleware('auth', 'role:Admin')->name('add.author');
    Route::post('/categoryadd',[\App\Http\Controllers\CategoryController::class,'add'])->middleware('auth', 'role:Admin')->name('add.category');
    Route::post('/bookadd',[\App\Http\Controllers\BookController::class,'add'])->middleware('auth', 'role:Admin')->name('add.book');
    Route::post('/adminadd',[\App\Http\Controllers\UserController::class,'addAdmin'])->middleware('auth', 'role:Admin')->name('add.admin');



    Route::group(['prefix'=> 'author', 'namespace'=>'author'], function (){
        Route::get('/index', [\App\Http\Controllers\AuthorController::class,'index'])->middleware('auth', 'role:Admin')->name('author.index');
        Route::post('/add',[\App\Http\Controllers\AuthorController::class,'add'])->middleware('auth','role:Admin')->name('author.add');
        Route::post('/delete/{id}',[\App\Http\Controllers\AuthorController::class,'delete'])->middleware('auth','role:Admin')->name('author.delete');
        Route::get('/update/{id}', [\App\Http\Controllers\AuthorController::class,'update'])->middleware('auth', 'role:Admin')->name('author.update');
        Route::post('/updatepost/{id}',[\App\Http\Controllers\AuthorController::class,'updatepost'])->middleware('auth', 'role:Admin')->name('author.updatepost');
    });
    Route::group(['prefix' => 'category', 'namespace'=>'category'], function (){
        Route::get('/index', [\App\Http\Controllers\CategoryController::class,'index'])->middleware('auth', 'role:Admin')->name('category.index');
        Route::post('/add',[\App\Http\Controllers\CategoryController::class,'add'])->middleware('auth', 'role:Admin')->name('category.add');
        Route::post('/delete/{id}',[\App\Http\Controllers\CategoryController::class,'delete'])->middleware('auth', 'role:Admin')->name('category.delete');
        Route::get('/update/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->middleware('auth','role:Admin')->name('category.update');
        Route::post('/updatepost/{id}',[\App\Http\Controllers\CategoryController::class,'updatepost'])->middleware('auth', 'role:Admin')->name('category.updatepost');
    });
    Route::group(['prefix'=>'book','namespace'=>'book'], function (){
        Route::get('/index',[\App\Http\Controllers\BookController::class,'index'])->middleware('auth','role:Admin')->name('book.index');
        Route::post('/add',[\App\Http\Controllers\BookController::class,'add'])->middleware('auth', 'role:Admin')->name('book.add');
        Route::post('/delete/{id}',[\App\Http\Controllers\BookController::class, 'delete'])->middleware('auth', 'role:Admin')->name('book.delete');
        Route::get('/update/{id}',[\App\Http\Controllers\BookController::class,'update'])->middleware('auth', 'role:Admin')->name('book.update');
        Route::post('updatepost/{id}',[\App\Http\Controllers\BookController::class,'updatepost'])->middleware('auth', 'role:Admin')->name('book.updatepost');
    });
    Route::group(['prefix'=>'hire','namespace'=>'hire'], function (){
        Route::get('/index',[\App\Http\Controllers\HireController::class,'index'])->middleware('auth','role:Admin')->name('hire.index');
        Route::post('/delete/{id}',[\App\Http\Controllers\HireController::class,'delete'])->middleware('auth','role:Admin')->name('hire.delete');
    });
    Route::group(['prefix'=>'admin','namespace'=>'admin'], function (){
        Route::get('/index', [\App\Http\Controllers\UserController::class,'adminList'])->middleware('auth', 'role:Admin')->name('admin.index');
        Route::post('/add', [\App\Http\Controllers\UserController::class,'addAdmin'])->middleware('auth', 'role:Admin')->name('admin.add');
    });

//USER

    Route::get('/profile',[\App\Http\Controllers\UserController::class,'profile'])->middleware('auth','role:user')->name('user.profile');
    Route::post('/profile/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->middleware('auth', 'role:user')->name('profile.update');
    Route::get('/book', [\App\Http\Controllers\User\BookController::class,'index'])->middleware('auth','role:user')->name('user.book');
    Route::get('/addhire/{book}',[\App\Http\Controllers\HireController::class,'add'])->middleware('auth','role:user')->name('hire.add');
    Route::get('/mybook', [\App\Http\Controllers\User\BookController::class,'mybook'])->middleware('auth','role:user')->name('user.mybook');
    Route::post('/updatehire/{id}',[\App\Http\Controllers\HireController::class,'update'])->middleware('auth','role:user')->name('hire.update');

//Route::get('/',function (){
//    return view('admin/index');
//})->middleware('auth', 'role:admin');
//Route::get('/', function (){
//    return view('user/index');
//})->middleware('auth');
require __DIR__.'/auth.php';

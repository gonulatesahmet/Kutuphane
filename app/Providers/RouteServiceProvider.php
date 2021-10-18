<?php

namespace App\Providers;

use App\Models\Hire;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    public static function redirectTo(){
        if(auth()->user()->userType == 'Admin'){
            return '/admin';
        }
        if(auth()->user()->userType == 'user'){
            $bookList =\Illuminate\Support\Facades\DB::table('book')
                ->select('book.id','bookName','bookCode','bookDescription','bookState','pageCount','price','categoryName','fullName')
                ->join('author','author.id','=','book.authorId')
                ->join('category','category.id','=','book.categoryId')
                ->where('bookState','=','Mevcut')
                ->get();

            return '/user';
        }
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
        return view('/welcome', compact('totalUser', 'totalHire', 'totalBook','topUser'));
    }

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}

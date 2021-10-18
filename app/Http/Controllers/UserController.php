<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addAdmin(Request $request){
        $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            'birthDate' => ['required', 'date'],
            'age' => ['required'],
        ]);

        $user = new User;
        $user->fullName = $request->input('fullName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->birthDate= $request->input('birthDate');
        $user->age=$request->input('age');
        $user->userType= 'Admin';

        $user->save();
        return redirect('/');
    }
    public function adminList(){
        $adminList = DB::table('users')
            ->where('userType','=','Admin')
            ->get();

        return view('/admin/admin/index', compact('adminList'));
    }
    public function profile(){
        return view('user/profile/profile');
    }
    public function update(Request $request,$id){
        $user = User::find($id);

        $user->fullName = $request->fullName;
        $user->birthDate = $request->birthDate;
        $user->age = $request->age;

        $user->save();
        return redirect('/profile');
    }
}

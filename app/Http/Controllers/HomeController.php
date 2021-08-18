<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserPass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function changePassword(){
        return view("auth.chnagepassword");
    }

    public function updatePassword(UpdateUserPass $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=User::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();
                       return Redirect()->route('login');
                 }
                 else{
                       return Redirect()->back();
                 }
      }else{

               return Redirect()->back();
      }

}
    public function logout()
    {
       Auth::logout();

       return view("auth.login");

    }
}

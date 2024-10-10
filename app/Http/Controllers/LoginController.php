<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    
   public function adminLogin(){
           return view("auth.admin-login");
   }
   public function customLogin($request){
        $email=$request->input("email");
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           
            $users = User::where('email', '=', $email)->get();
           
            foreach($users as $u){
                if($u->user_type==1){
                     return 1;
                }
                else{
                   return 0;
                }
            }
           
        }
        else{
            return 0;
        }
   }
   public function auth(Request $request)
        {
            $request->validate([
            'email' => 'required',
            'password' => 'required',
             ]);
             $auth=$this->customLogin($request);
           if($auth==1){
             return redirect()->intended('admin-dashboard')->withSuccess('Login details are not valid');
           }else{
             
               return redirect("admin-auth")->withSuccess('Login details are not valid');
           }  
           
        }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    
    public function sellerReg(Request $request) {
        if($request->session()->has('userType')){
          $request->session()->forget('userType');
        }
      
      $request->session()->put('userType','2');
       return view('userpanel.sellerregistor');
   }
   public function jobSeeker(Request $request) {
        if($request->session()->has('userType')){
          $request->session()->forget('userType');
        }
      
      $request->session()->put('userType','3');
      return view("auth.register-seeker");
   } 
   public function employeReg(Request $request){
    if($request->session()->has('userType')){
        $request->session()->forget('userType');
      }
    
    $request->session()->put('userType','2');
    return view("auth.employer-registration");
   }
  
    
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email=$request->input("email");
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $users = User::where('email', '=', $email)->get();
            foreach($users as $u){
                if($u->user_type==1){
                     return redirect()->intended('admin-dashboard')
                        ->withSuccess('Signed in');
                }
                elseif($u->user_type==2){
                     return redirect()->intended('employe-dashboard')
                        ->withSuccess('Signed in');
                }
                elseif($u->user_type==3){
                     return redirect()->intended('job-seeker-dashboard')
                        ->withSuccess('Signed in');
                }
                else{
                   return redirect("login")->withSuccess('Login details are not valid');  
                }
            }
           
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
    
      public function customLoginreg($email)
    {
        
        // $email=$request->input("email");
     
       
            $users = User::where('email', '=', $email)->get();
        
            foreach($users as $u){
              
                if($u->user_type==1){
                    return 1;
                    
                }
                elseif($u->user_type==2){
                    return 2;
                }
                elseif($u->user_type==3){
                    return 3;
                }
                else{
                    return $u->user_type;
                    return 0; 
                }
            }
           
        
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
      
    public function customRegistration(Request $request)
    {  
      
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
         
        $check = $this->create($data);
         $u=($this->customLoginreg($request->input('email')));
         if($u==1){
                       
             return redirect()->intended('admin-dashboard')
                ->withSuccess('Signed in');
        }
        elseif($u==2){
         
             return redirect()->intended('employe-dashboard')
                ->withSuccess('Signed in');
        }
        elseif($u==3){
           
             return redirect()->intended('job-seeker-dashboard')
                ->withSuccess('Signed in');
        }
        else{
           return redirect("login")->withSuccess('Login details are not valid');  
        }
        
        
        
        
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    //  public function customIRegistration(Request $request)
    // {  
      
    //     $request->validate([
    //         'name' => 'required',
    //         'number'=>'required',
    //         'countryCode'=>'required',
    //         'remember'=>'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
           
    //     $data = $request->all();
    //     //   $newUser->user_type=session()->get("userType");
    //     $check = $this->create($data);
         
    //     return redirect("dashboard")->withSuccess('You have signed-in');
    // }

    public function create(array $data)
    {
       
        
      return User::create([
        'user_type'=>session()->get("userType"),
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}

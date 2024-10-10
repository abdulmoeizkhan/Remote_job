<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Hash;
use Carbon\Carbon;
use Session;
use App\Models\User;
use App\Models\{Country,State};
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
       $data['countries'] = Country::get(["name","id"]);
      return view("auth.register-seeker",$data);
   } 
   public function employeReg(Request $request){
    if($request->session()->has('userType')){
        $request->session()->forget('userType');
      }
    
    $request->session()->put('userType','2');
     $data['countries'] = Country::get(["name","id"]);
    return view("auth.employer-registration",$data);
   }
  
    
    public function index()
    {
        return view('auth.login');
    }  
    public function user($request)
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
                if($u->user_type==3){
                     return 3;
                }
                elseif($u->user_type==2){
                    return 2;
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
    public function customLogin(Request $request)
    {
        // dd("asas");
            $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            ]);
        // dd('hello worl');
            //  $auth=$this->user($request);
               $email=$request->input("email");
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           
            $users = User::where('email', '=', $email)->first();
         
              if($users->user_type==3){
                    
                    
                    User::where('id',Auth::user()->id)->update([
                             'last_login_at' => Carbon::now()->toDateTimeString(), 
                        ]);
                    // dd($users);$users
                    
                     return redirect()->intended('job-seeker-dashboard')
                        ->withSuccess('Signed in');
                }
                elseif($users->user_type==2){
                     return redirect()->intended('employe-dashboard')
                        ->withSuccess('Signed in');
                }
                else{
                   return redirect("login")->withSuccess('Login details are not valid');  
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
    public function email_verification($number){

    // $number =       rand(0000,9999);  
    // $details = [
    //     'number' => $number,
    //     'title' => 'Mail from Remotephase',
    //     'body' => 'This is for testing email using smtp'
    // ];
   
    // \Mail::to('raxa.kzx@gmail.com')->send(new \App\Mail\MyTestMail($details));

    // dd('emnail sent');

     $find =  User::where('verification_code',$number)->first();
        if($find!=null){
     User::where('verification_code',$number)->update([
         'email_verified' => 1
         ]);   
         $status = 1;
        }
        else{
            session()->flash('message','We Cant Find your Email PLease Resend Your Email!');
         $status = 0;   
        }
        $data = [
            'status' => $status
            ];
         return view('email-verification')->with($data);
        // dd($number);
    }
     public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}

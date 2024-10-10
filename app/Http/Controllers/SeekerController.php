<?php

namespace App\Http\Controllers;

// use App\Models\JobSeeker;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\seekerInformation;
use App\Models\JobSeeker;
use App\Models\Currency;
use App\Models\Jobpost;
use App\Models\JobType;
use App\Models\User;
use App\Models\{Country,State};
use App\Models\jobCategory;
use App\Models\Sub_category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;






class SeekerController extends Controller
{
    public function index(){
         
        $uid = Auth::user()->email;
        $profile = JobSeeker::where('email','=',$uid)->get();
        foreach($profile as $sk){
            
        }
        $data['seekers']=$sk;
        
        $data['jobs'] = Jobpost::join('countries', 'countries.id', '=', 'jobposts.country')
              		->get(['countries.name as cc', 'jobposts.*']);
            
            // $job = Jobpost::get();
            // $seeker = seekerInformation::where('user_id',Auth::user()->id)->first();
            //   $job = Jobpost::where('sub_category',$seeker->sub_category)
            // ->orWhere('job_type', 'like', '%' . $seeker->job_type . '%')->get();
        //   dd($job); 
    
        return view("seeker.index",$data);
    }
    
    public function Profile(Request $request){
        $email=Auth::user()->email;
        $uid=Auth::user()->id;
        // dd($uid);
         $data['seekers'] = JobSeeker::where("email","=",$email)->first();
         $data['jobs'] = Jobpost::where("user_id","=",$uid)->get();
         
          $data['info'] = seekerInformation::where("user_id","=",$uid)->first();
        // dd($data['info']);
        
        return view("seeker.profile",$data);
    }
    
    public function myresume(Request $request){
        $email=Auth::user()->email;
        $uid=Auth::user()->id;
        // dd($uid);
         $data['seekers'] = JobSeeker::where("email","=",$email)->first();
        // dd($data['seekers']);
        
        return view("seeker.myresume",$data);
    }
    public function editresume($id){
        // dd($id);
        $email=Auth::user()->email;
        $uid=Auth::user()->id;
        // dd($uid);
         $data['seekers'] = JobSeeker::where("email","=",$email)->first();
         
        return view("seeker.editingresume")->with($data);
    }
           public function editinformation(Request $request){
        $data['cat']=jobCategory::all();
        $data['sub_cat']=Sub_category::all();
        // dd($data['sub_cat']);
        $data['type']=JobType::all();
        $data['countries'] = Country::all();
        $data['jobtypes'] = JobType::get();
        $data['cat'] = JobCategory::get();
        $data['curr'] =Currency::all();
        
            $email=Auth::user()->email;
            $uid=Auth::user()->id;
            $data['seekers'] = JobSeeker::where("email","=",$email)->first();
        
        $uid=Auth::user()->id;
        $data['info'] = seekerInformation::where("user_id","=",$uid)->first();
        //  dd($data['info']);
        // $data['information'] = seekerinformation::find($id);
        // dd($id);
        return view('seeker.editinformation',$data);

    }
     public function updateinformation(Request $request){
        // dd($request->all());   
        
        $id=Auth::user()->id;
        //  dd($id);
        
        $information = seekerinformation::where("user_id", $id)->first();
        // $information = seekerinformation::find($request->user_id);
        
        $information->resume_name = $request->resume_name;
        $information->job_category = $request->job_category;
        $information->sub_category = $request->sub_category;
        $information->expected_salary_per = $request->expected_salary_per;
        $information->objective = $request->objective;
        $information->job_type = json_encode($request->job_type);
        $information->desired_location = $request->desired_location;
        $information->start_date = $request->start_date;
        $information->currency = $request->currency;
        $information->expected_salary = $request->expected_salary;
        $information->target_job_titles = $request->target_job_titles;
        $information->industry_sector = json_encode($request->industry_sector);
        $information->nationality = $request->nationality;
        $information->description = $request->description;
        $information->facebook_url = $request->facebook_url;
        $information->instagram_url = $request->instagram_url;
        $information->linkedin_url = $request->linkedin_url;
        $information->twitter_url = $request->twitter_url;
        $information->save();
        return redirect()->back();
    }    
    public function updateresume(Request $request){
        // dd($request->all());
        $uid = Auth::user()->email;
        $id = Auth::user()->id;
        $seeker = JobSeeker::where('email','=',$uid)->first();
  $random=rand(0000,9999);
        $file = $request->file('resume');
        $filename = time().$random.'_'.$file->getClientOriginalName();
        $location = 'uploads/seeker/resume';
        $file->move($location,$filename);
        
         $seekers = JobSeeker::find($seeker->id);
        $seekers->my_resume = $filename;
        

        $seekers->save();
        return redirect()->to('job-seeker-myresume');
    }
    
    public function savedJobs(){
            $email=Auth::user()->email;
            $uid=Auth::user()->id;
            $data['seekers'] = JobSeeker::where("email","=",$email)->first();
            return view("seeker.savedjobs",$data);
    }   
    public function saveSearches(){
            $email=Auth::user()->email;
            $uid=Auth::user()->id;
            $data['seekers'] = JobSeeker::where("email","=",$email)->first();
          return view("seeker.savedseraches",$data);
    }
    public function myJobs(){
         $email=Auth::user()->email;
         $uid=Auth::user()->id;
         $data['seekers'] = JobSeeker::where("email","=",$email)->first();
         return view("seeker.applicants",$data);
    }
       public function jobsview(){
        //  $hion = Jobpost::whereDate('futureDate','<=',Carbon::now()->format('Y-d-m'))->get();
// dd($hion);
        //  $data['jobs'] = Jobpost::whereDate('futureDate','>',Carbon::now()->format('Y-d-m'))->get();
         $data['jobs'] = Jobpost::get();
        //  dd($data);
         $email=Auth::user()->email;
         $data["seekers"] = JobSeeker::where("email","=",$email)->first();
    
        return view("seeker.dummy",$data);
    }
    

    public function view(){
    
    $model['category'] = jobCategory::get();
    $model['countries'] = Country::get();
     
    $model['jobs'] = Jobpost::get();
    return view('seeker.seekerjob_view',$model);  
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
                if($u->user_type==3){
                     return 3;
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
    public function createSeeker(array $data)
    {
    
    // dd($data['verification_code']);
    
    
      return User::create([
        'user_type'=>3,
        'name' => $data['name'],
        'email' => $data['email'],
        'password' =>hash::make($data['password']),
      'verification_code'=>$data['verification_code'] 
    
      ]);
    
        
    } 
    public function create(Request $request){
             
              $request->validate([
            'firstname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'resume' => 'required',
            'image' => 'required',
            'city' => 'required',
            'country' => 'required',
            'state' => 'required',
            'mobile' => 'required',
        //   'captcha' => 'required|captcha'
           
        ],
          ['captcha.captcha'=>'Invalid captcha code.']);

        
       
            // $state=$request->state;
        
        $random=rand(1,2000);
        $file = $request->file('resume');
        $filename = time().$random.'_'.$file->getClientOriginalName();
        $location = 'uploads/seeker/resume';
        $file->move($location,$filename);
        
        $image = $request->file('image');
        $imagefilename = time().$random.'_'.$image->getClientOriginalName();
        $imagelocation = 'uploads/seeker/image';
        $image->move($imagelocation,$imagefilename);

        
        
        $seekers = new JobSeeker();
        $seekers->firstname = $request->firstname;
        $seekers->lastname = $request->lastname;
        $seekers->email = $request->email;
        $seekers->password = $request->password;
        $seekers->address = $request->address;
        $seekers->country = $request->country;
        $seekers->city = $request->city;
        $seekers->zip = $request->zip;
        $seekers->state = $request->state;
        $seekers->mobile = $request->mobile;
        $seekers->resume_research = $request->cv_searchable;
        $seekers->privacy = $request->privacy;
        $seekers->my_resume = $filename;
        $seekers->image = $imagefilename;

        $seekers->newsletter = $request->newsletter;
        $seekers->resume_research = $request->cv_searchable;
        $seekers->save();
        
        
               
    $number =       rand(0000,9999);  
    $details = [
        'number' => $number,
        'title' => 'Mail from Remotephase',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));

        
        
        
        $seekerData=array('name'=>$request->firstname,'email'=>$request->email,
                         'password'=>$request->password,'verification_code'=>$number);
      
        if($this->createSeeker($seekerData)){
             $auth=$this->customLogin($request);
             
              if($auth==3){
                          JobSeeker::where('email',Auth::user()->email)->update([
                              'user_id' => Auth::user()->id
                              ]);
                  
                     return redirect()->intended('seeker-confirm')
                        ->withSuccess('Signed in');
                        
                        
                }
                else{
                   return redirect("login")->withSuccess('Login details are not valid');  
                }
        }
      else{
          return redirect("login")->withSuccess('Login details are not valid');  
      }
        return view('index'); 

    }


    public function viewinformation(Request $request){
        $data['sub']=Sub_category::all();
        $data['type']=JobType::all();
        $data['countries'] = Country::all();
        $data['jobtypes'] = JobType::get();
        $data['cat'] = JobCategory::get();
        $data['curr'] =Currency::get();
        
        //   $data['curr'] = seekerInformation::join('currencies', 'seeker_information.currency', '=', 'currencies.id')
        //   ->get();
        //   dd($data['curr']);
           
           
            $email=Auth::user()->email;
            $uid=Auth::user()->id;
            $data['seekers'] = JobSeeker::where("email","=",$email)->first();
        // dd($data['jobtypes']);
        $id=Auth::user()->id;
        // $data['information'] = seekerinformation::find($id);
        // dd($id);
        return view('seeker.information',$data);

    }
    
    
     



    public function information(Request $request){
            $request->validate([
            'resume_name' => 'required',
            'objective' => 'required',
            'currency' => 'required',
            'expected_salary' => 'required',
            'expected_salary_per' => 'required'
           
           
        ]); 
        // dd($request);
        // dd($request->input());
        $id=Auth::user()->id;
        // dd($id);
        
        $information = new seekerinformation;
        $information->user_id=$id;
        $information->resume_name = $request->resume_name;
        $information->job_category = $request->job_category;
        $information->sub_category = $request->sub_category;
        $information->expected_salary_per = $request->expected_salary_per;
        $information->objective = $request->objective;
        $information->job_type = json_encode($request->job_type);
        $information->desired_location = $request->desired_location;
        $information->start_date = $request->start_date;
        $information->currency = $request->currency;
        $information->expected_salary = $request->expected_salary;
        $information->target_job_titles = $request->target_job_titles;
        $information->industry_sector = json_encode($request->industry_sector);
        $information->nationality = $request->nationality;
        $information->description = $request->description;
        $information->facebook_url = $request->facebook_url;
        $information->instagram_url = $request->instagram_url;
        $information->linkedin_url = $request->linkedin_url;
        $information->twitter_url = $request->twitter_url;
        $information->save();
        
       return redirect()->route("job-seeker-dashboard");

    }
    
    
    public function updateProfile(Request $request){
        
         $email=Auth::user()->email;
        // $seekers =JobSeeker::where("email",'=',$email);
        // $seekers->firstname = $request->input("firstname");
        // $seekers->lastname =$request->input("lasttname");
         JobSeeker::where("email", $email)->update(["firstname" =>$request->input("firstname"),'lastname'=>$request->input("lasttname")]);
        // $seekers->update();
         $id=Auth::user()->id;    
        //  dd($id);
        $information = seekerinformation::where("user_id", $id)->first();
        // dd($information);
        $information->description = $request->description;
        $information->facebook_url = $request->facebook_url;
        $information->instagram_url = $request->instagram_url;
        $information->linkedin_url = $request->linkedin_url;
        $information->twitter_url = $request->twitter_url;
         //JobSeeker::where("email", $email)->update(["firstname" =>$request->input("firstname"),'lastname'=>$request->input("lasttname")]);
        
         $information->save();
        
        
        return redirect('/job-seeker-profile');
        
         
    
    }
    
    

}

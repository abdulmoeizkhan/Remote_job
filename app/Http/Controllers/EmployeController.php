<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\Jobpost;
use App\Models\jobCategory;
use App\Models\JobType;
use App\Models\job_apply;
use App\Models\Sub_category;
use App\Models\JobExperience;
use App\Models\Package;
use App\Models\View;
use App\Models\Status_History;
use App\Models\Select_Job_Candidate;
use App\Models\JobSeeker;
use App\Models\seekerInformation;
use App\Models\SeekerJobAppliedStatus;
use App\Models\{Country,State};
use DB;
use Carbon\Carbon;

use App\Models\CompanySubscription;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeController extends Controller
{
    public function index(){
          $today = Carbon::now()->format('Y-d-m');


            Jobpost::where([['futureDate',$today],['active-status',0]])->update([
             'active-status'=>1
             ]);
        $uid = Auth::user()->company_id;
        // dd($uid);
        $views = View::join('jobposts','views.job_id','=','jobposts.id')->where('company_id',$uid)->get();
        if(count($views)==0){
            
            // dd('hello');
            return view("employe.index");
            
        }
        else{
        foreach($views as $item){
             $count_view[] = $item->view;
        }
        
      
            
            $selected=Select_Job_Candidate::
                join('jobposts','select__job__candidates.job_id','=','jobposts.id')->count();
                // dd($selected);
     
             
        $data['jobs'] = Jobpost::where('company_id','=',$uid)->get();
        $data = [
            'jobs' => Jobpost::where('company_id','=',$uid)->get(),
            'total_jobs' => Jobpost::where('company_id','=',$uid)->count(),
            'total_users' => User::where('company_id',$uid)->count(),
            'job_apply' =>job_apply::where('employee_id',$uid)->count(),
             'total_views' =>array_sum($count_view),
             'total_selected'=>Select_Job_Candidate::join('jobposts','select__job__candidates.job_id','=','jobposts.id')->count(),
            
             
            ];
        return view("employe.index")->with($data);
        
    }
    }
    
    
    
    public function order_history(){
           $company_id = Auth::user()->company_id;
          $data["subscription"] = CompanySubscription::where('company_id',$company_id)->
           join('packages', 'company_subscriptions.pkg_id', '=', 'packages.id')->
           select('company_subscriptions.*','packages.name')->get();
        //   dd($subscription); 
      
        return view('employe.order_history',$data);
    
    }
    public function customLogin($request)
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
                if($u->user_type==2){
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
    
    public function createSeeker(array $data)
    {
        
      return User::create([
        'user_type'=>2,
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'verification_code'=>$data['verification_code'] 

      ]);
    } 
    public function create(Request $request){
        // dd($request->all());
        $request->validate([
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
          'firstname' => 'required',
          'lastname' => 'required',
          'city' => 'required',
          'zip' => 'required',
          'address' => 'required',
          'state' => 'required',
          'country' => 'required',
          'phone' => 'required',
          'mobile' => 'required',
          'my_resume' => 'required',
        //   'privacy' => 'required',
          'company_name' => 'required',
        ]);
        // dd($request->all()); 
        $random=rand(1,2000);
        $file = $request->file('my_resume');
                $filename = time().$random.'_'.$file->getClientOriginalName();

                // File upload location
                $location = 'uploads/employe/logo';

                // Upload file
                $file->move($location,$filename);


        // $my_resume = time().$random.'.'.$request->my_resume->extensionuploads/employe/resume();
        // $request->my_resume->move(public_path('uploads/employe/resume'), $my_resume);
        // $userId = Auth::user()->id;
        $employer = new Employee();
        
        $employer->firstname = $request->firstname;
        $employer->lastname = $request->lastname;
        $employer->email = $request->email;
        $employer->password = ($request->password);
        $employer->address = $request->address;
        $employer->address2 = $request->address2;
        $employer->company_desc = $request->company_desc;
        $employer->no_emp = $request->no_emp;
        $employer->company_website = $request->company_website;
        $employer->country = $request->country;
        $employer->city = $request->city;
        $employer->zip = $request->zip;
        $employer->state = $request->state;
        $employer->phone = $request->phone;
        $employer->mobile = $request->mobile;
        $employer->logo = $filename;
        $employer->plan_id = 1;
        $employer->resume_research = $request->cv_searchable;
        $employer->newsletter = $request->newsletter;
        $employer->company_name = $request->company_name;

        
        $employer->save();
        // dd($request);
    $number =       rand(0000,9999);  
    $details = [
        'number' => $number,
        'title' => 'Mail from Remotephase',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to($request->email)->send(new \App\Mail\MyTestMail($details));
        
        
        $employerData=array('name'=>$request->firstname,'email'=>$request->email,
                      'user_type'=>2,'password'=>$request->password,'verification_code'=>$number);
                      $this->createSeeker($employerData);
                      $u=($this->customLogin($request));
                      if($u==2){
         
                          $company_id = Employee::where('email',Auth::user()->email)->first();
                          User::where('id',Auth::user()->id)->update([
                              'company_id' => $company_id->id
                              ]);
                        
            return redirect()->intended('employe-dashboard');
            //   ->withSuccess('Signed in')->with('message','Your account created successfull');
       }
       else{
          return redirect("login")->withSuccess('Login details are not valid');  
       }
         
        // return view('employeindex'); 

    }
    public function resendemail(){
         $send_email =  Auth::user()->email;
            $number =       rand(0000,9999);  
    $details = [
        'number' => $number,
        'title' => 'Mail from Remotephase',
        'body' => 'This is for testing email using smtp'
    ];
   
    User::where('id',Auth::user()->id)->update([
        'verification_code'=>$number
        ]);
   
    \Mail::to('moeizjust@gmail.com')->send(new \App\Mail\MyTestMail($details));
    // dd('hello');
    session()->flash('success','Verification Link Successfully Send TO Your Email!');
        return back();
    }
    
    
    
    
    public function editProfile(){
        // dd("sdfgh");
          $uid = Auth::user()->company_id;
        //   dd($uid);
        $data['emp'] = Employee::where('id','=',$uid)->first();
        // dd($data['emp']);
        $data['countries'] = Country::get(["name","id"]);
          $data['states'] = State::get(["name","id"]);
        //   dd($data['states']);
          $data['subscription'] = CompanySubscription::join('packages', 'company_subscriptions.pkg_id', '=', 'packages.id')
          ->orderBy('company_subscriptions.id', 'desc')
          ->select('company_subscriptions.*','packages.name')->first();

        //   dd($data['subscription']);
        
        return view('employe.profile',$data);
    }
    public function employe_setting(){
        return view('employe.setting');
    }
    public function employe_setting_update(Request $request){
        $pass=  Auth::user()->password;
        // dd($pass,$password);
        if (!Hash::check($request->old_password, $pass)) {
        session()->flash('danger','Incorrect Old Password');
        return redirect()->back();
             }else{
                 
                    if($request->new_password==$request->con_password){
                        $update= User::find(Auth::user()->id);
                        $update->password = Hash::make($request->new_password);
                        $update->save();
                        session()->flash('success','Password Successfully Changed!');
                        return redirect()->back();                
                        
                    }else{
                    session()->flash('danger','Password And Confirm Password Doesnot Match');
                    return redirect()->back();                
                    }
                 
        }
        

        // dd($request->all());
    }
    
    
    public function updateProfile(Request $request){
        
        $uid = Auth::user()->email;
        $id = Auth::user()->id;
        $employer = Employee::where('email','=',$uid)->first();
        $image = $employer->logo;
        if(count($request->file()) > 0)
        {
        $image = $id.'logo'.'.'.$request->my_resume->getClientOriginalExtension();
        $request->my_resume->move(public_path('uploads/employe/logo'), $image);  
        }
        $employer=Employee::where("email",$uid)
                  ->update([
                            "firstname"=> $request->firstname,
                            "lastname"=> $request->lastname,
                            "address"=> $request->address,
                            "country"=> $request->country,
                            "city"=> $request->city,
                            "zip"=> $request->zip,
                            "state"=> $request->state,
                            "phone"=> $request->phone,
                            "mobile"=> $request->mobile,
                            "company_desc"=> $request->company_desc,
                            "logo"=> $image,
                            // "privacy"=> $request->privacy,
                            // "resume_research"=> $request->cv_searchable,
                            "newsletter"=> $request->newsletter,
                            "company_name"=> $request->company_name
                      ]);
        return redirect('employe-edit-profile');
    }


  public function createJob(){
          $uid = Auth::user()->company_id;
        
        
    //     $check_plan = CompanySubscription::
    //         join('packages','company_subscriptions.pkg_id','=','packages.id')
    //         ->where('company_id',$uid)->first();
    //      $count_jobs =  Jobpost::where('company_id',$uid)->count();
    //      if($check_plan!=null){
    //           if($check_plan->jobs>$count_jobs){
    //             $data['pkg'] = 1;
    //             }else{
    //                   $data['pkg'] = 0;
    //                 }
    //     }
    //      else{
    //     $data['pkg'] = 1;
    //   }
        $data['cat']=jobCategory::all();
        $data['sub']=Sub_category::all();
        $data['type']=JobType::all();
        $data['exp']=JobExperience::all();
        $data['countries']=Country::all();

         $data['emp'] = Employee::where('id','=',$uid)->first();
        $pkg =  Package::find($data['emp']->plan_id);
        $count_jobs =  Jobpost::where('company_id',$uid)->count();
        
        if($pkg->jobs>$count_jobs){
        // dd($count_jobs);
        $data['pkg'] = 1;
        }else{
        $data['pkg'] = 0;
            
        }

        // dd($data);        
        
       return view('employe.job-posting',$data);
  }
  
  public function jobPost(Request $request){
      
  }
  
  public function view(){
      
    $uid = Auth::user()->company_id;
    $data['jobs'] = Jobpost::where('company_id','=',$uid)->orderBy('id', 'desc')->get();
    // dd($data);
    return view('employe.view-jobs',$data);  
  }
  
 public function ActiveJobs(){
     $uid = Auth::user()->company_id;
     $data['jobs'] = Jobpost::where('company_id','=',$uid)->where("status",'=','1')->orderBy('id', 'desc')->get();
     return view("employe.active_jobs",$data);
 }
 
 public function ExpiredJobs(){
     $uid = Auth::user()->id;
     $data['jobs'] = Jobpost::where('user_id','=',$uid)->where("status",'=','0')->orderBy('id', 'desc')->get();
     return view("employe.expired_jobs",$data);
 } 
 
//  public function Applicants(){
//      $uid = Auth::user()->id;
//     //  $data['jobs'] = Jobpost::where('user_id','=',$uid)->where("status",'=','0')->orderBy('id', 'desc')->get();
//      return view("employe.expired_jobs",$data);
//  }

    public function Applicants(){
        
     $uid = Auth::user()->company_id;
         
  $job =  job_apply::
                join('jobposts','job_applies.jobpost_id','=','jobposts.id')
                ->join('users','job_applies.seeker_id','=','users.id')
                // ->join('job_seekers','job_applies.seeker_id','=','job_seekers.id')
                ->where('jobposts.company_id',$uid)
                ->get();
                
        // dd($job);
        $data = [
            'jobs' => $job,
            ];
             return view("employe.applicants",$data);

    }
    public function employe_all_users(){
        // dd('hy');
        $company_id =  Employee::where('id',Auth::user()->company_id)->first();
        
        
        $data = [
            'all_users' => User::where('company_id',$company_id->id)->get(), 
            ];
            // dd($data);
             return view("employe.user.all_users")->with($data);
        
        
    }
        public function employe_add_users(){
        // dd('hy');
             return view("employe.user.add_user");
        
        
    }
    public function employe_all_contacts(){
        $comp_id = Auth::user()->company_id;
        $data = [
            'heading' => 'All Contacts',
            'all_contact' => User::where('company_id',$comp_id)->get(),
            ];
        return view('employe.user.all_contact')->with($data);

    }
    public function employe_save_user(Request $request){
        // dd($request->all());
         $company_id =  Employee::where('email',Auth::user()->email)->first();
        // dd($g);
        
        
        // dd($request->all());
              User::create([
        'user_type'=>2,
        'name' => $request->first_name,
        'email' => $request->email,
        'phone'=> $request->phone,
        'password' => Hash::make($request->password),
        'company_id' =>$company_id->id
        
      ]);
    return redirect()->to('employe_all_users');
    }
    public function view_resume($id){
         $seeker = DB::table('job_seekers')->where('id',$id)->first();
        // dd($seeker);
        
        $data =[
            'heading' => 'View Resume',
            'seeker_data'=>$seeker 
            ];
         return view("employe.view_resume")->with($data);
        
        
    }
    public function employe_edit_user($id){
        // dd($id);
        
        $data = [
            'user' =>User::find($id), 
            ];
        return view('employe.user.edit_user')->with($data);
    }
    public function employe_update_user(Request $request){
        
        $check = User::where('id',$request->user_id)->first();    
        
          if($check->email==$request->email){
            // dd($request->all());
        $user = User::find($request->user_id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        
        $user->password =Hash::make($request->password);
        $user->save();
              
          }else{
          $validated = $request->validate([
       'email' => 'required|unique:users',
   ]);
        $user = User::find($request->user_id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        
        $user->password =Hash::make($request->password);
        $user->save();

              
          } 
     session()->flash('success','User Successfully Updated');   
        return redirect()->to('employe_all_users');
        
    }
     public function employe_save_resume(){
         $save_data = DB::table('saved_resume')->where('company_id',Auth::user()->company_id)
         ->join('job_seekers','saved_resume.seeker_id','=','job_seekers.id')
         ->get();
        //  dd($save_data);
        $data = [
            'save_data'=>$save_data 
            ];
            
            return view('employe.saved_resume')->with($data);

     }
     public function employe_save_cv($id){
        //  dd($id);
        DB::table('saved_resume')->insert([
            'company_id' => Auth::user()->company_id,
            'seeker_id' => $id
            ]);
            session()->flash('success','Resume Saved Successfully !');
        return redirect()->to('employe-job-applicants');         
     }
          public function employe_unsave_cv($id){
        //  dd($id);
        DB::table('saved_resume')->where('seeker_id', $id)->delete();
            session()->flash('danger','Resume Unsaved Successfully !');
        return redirect()->to('employe-job-applicants');         
     }
     public function employe_applicant_tracking(){
         
              $uid = Auth::user()->company_id;
        
  $job =  job_apply::
                join('jobposts','job_applies.jobpost_id','=','jobposts.id')
                ->join('users','job_applies.seeker_id','=','users.id')
                // ->join('job_seekers','job_applies.seeker_id','=','job_seekers.id')
                ->where('jobposts.company_id',$uid)->select('users.*','job_applies.seeker_id as seeker',
                'job_applies.jobpost_id as jobpost_id',
                'job_applies.created_at as created_at','jobposts.title as job_title','jobposts.status as job_status')
                ->get();        
        $data = [
            
            'heading' => 'Applications Tracking',
            'jobs' => $job,
            
            ];
        return view("employe.applicant_tracking.applicant_tracking")->with($data);
 
     }
     
     public function date(Request $request){
     
        //  dd($request->all());
      $startDate = Carbon::createFromFormat('Y-m-d', $request->start_date);
        $endDate = Carbon::createFromFormat('Y-m-d', $request->end_date);
//   dd($endDate);
//   dd($startDate);
        // $users = job_apply::where('created_at', '>=', $startDate)
        //                 ->where('created_at', '<=', $endDate)
        //                 ->get();
        
  $job =  job_apply::
                join('jobposts','job_applies.jobpost_id','=','jobposts.id')
                ->join('users','job_applies.seeker_id','=','users.id')
                ->where('job_applies.created_at', '>=', $startDate)
                        ->where('job_applies.created_at', '<=', $endDate)
                ->select('users.*','job_applies.seeker_id as seeker',
                'job_applies.created_at as created_at','jobposts.title as job_title','jobposts.status as job_status',
                'jobposts.id as job_id')
                ->get();
                  
        // dd($job);
        $data = [
            
            'heading' => 'List of Applications',
            'jobs' => $job,
            
            ];
        return view("employe.applicant_tracking.all_applicants")->with($data);         
     }
     
     public function employe_all_applicantion(){
     
              $uid = Auth::user()->company_id;
        
  $job =  job_apply::
                join('jobposts','job_applies.jobpost_id','=','jobposts.id')
                ->join('users','job_applies.seeker_id','=','users.id')
                // ->join('job_seekers','job_applies.seeker_id','=','job_seekers.id')
                ->where('jobposts.company_id',$uid)->select('users.*','job_applies.seeker_id as seeker',
                'job_applies.created_at as created_at','jobposts.title as job_title','jobposts.status as job_status',
                'jobposts.id as job_id')
                ->get();
                
        // dd($job);
        $data = [
            
            'heading' => 'List of Applications',
            'jobs' => $job,
            
            ];
        return view("employe.applicant_tracking.all_applicants")->with($data);


     }
    public function employee_view_seeker_details($job_id,$id){
        // User::where('')
        // dd($job_id,$id);
        $info = DB::table('seeker_information')->where('user_id',$id)->first();
        
        $job_seekers = DB::table('job_seekers')->
        join('countries','job_seekers.country','=','countries.id')
        ->join('states','job_seekers.state','=','states.id')
        ->select('job_seekers.*','countries.name as country_name','states.name as state_name')
        ->where('user_id',$id)->first();
        
        $check_selected = Select_Job_Candidate::where(
            ['job_id'=>$job_id],['seeker_id'=>$id]
            )->first();
        $data = [
            'check_selected' =>$check_selected,
            'info' => $info,
             'basic_details' => User::find($id),    
            'heading' => 'Applicant Details',
                'currency' => DB::table('currencies')->where('id',$info->currency)->first(),   
            'seeker_detail' => $job_seekers,
            'jobpost_id'=>$job_id
            ];

        return view("employe.applicant_tracking.view_applicant_details")->with($data);

    }
    public function buy_package($id){
         $pkg = Package::where('id',$id)->first();
        // dd($pkg);
        $data = [
            'package' => $pkg
            ];
            return view("employe.payment.stripe_payment")->with($data);
    }
    public function my_subscription(){
            $company_id = Auth::user()->company_id;
            
              $subscribe_pkg = CompanySubscription::
                join('packages','company_subscriptions.pkg_id','=','packages.id')
                ->where('company_id',$company_id)->get();
            
            $subscribe_pkg = Employee::
                join('packages','employees.plan_id','=','packages.id')
                ->select('packages.*','employees.id')
                ->where('employees.id',$company_id)->first();
            // dd($subscribe_pkg);
            
            $data= [
                'heading' => 'My Plan',
                'package'=>$subscribe_pkg 
                ];
                
        return view("employe.my_plan")->with($data);
        
    }
    public function select_candidate($job_id,$seeker_id){
        // dd($job_id,$seeker_id);
         $save = new Select_Job_Candidate();
        $save->job_id =$job_id;
        $save->seeker_id =$seeker_id;
        $save->save();
        session()->flash('success','Cadidate Selected Successfully!');
        return redirect()->to('employee_view_seeker_details/'.$job_id.'/'.$seeker_id);
        
        
    }
        public function unselect_candidate($job_id,$seeker_id){
        // dd($job_id,$seeker_id);
         $save = Select_Job_Candidate::where(
             ['job_id'=>$job_id],['seeker_id'=>$seeker_id]
             )->delete();

        session()->flash('danger','Cadidate Un-Selected Successfully!');
        return redirect()->to('employee_view_seeker_details/'.$job_id.'/'.$seeker_id);
        
        
    }
    public function applicant_search(Request $request){

                      $uid = Auth::user()->company_id;
        
  $job =  job_apply::
                join('jobposts','job_applies.jobpost_id','=','jobposts.id')
                ->join('users','job_applies.seeker_id','=','users.id')
                // ->join('job_seekers','job_applies.seeker_id','=','job_seekers.id')
                ->where('jobposts.company_id',$uid)->select('users.*','job_applies.seeker_id as seeker',
                'job_applies.created_at as created_at','jobposts.title as job_title','jobposts.status as job_status',
                'jobposts.id as job_id')
                ->get();
    
        $data = [
            
            'heading' => 'List of Applications',
            'jobs' => $job,
            
            ];
        return view("employe.applicant_tracking.all_applicants")->with($data);
    }
    
    public function edit_job_applied_status($job_id,$seeker_id){
        // dd($job_id,$seeker_id);
         
        $check = SeekerJobAppliedStatus::where([['seeker_id',$seeker_id],['job_id',$job_id]])->first();
        if($check!=null){
            
        }else{
         $insertion = DB::table('apply_status')->get();
            foreach($insertion as $item){
                $save = new SeekerJobAppliedStatus();
                $save->option_id = 1; 
                $save->option_status_id = $item->id;
                $save->seeker_id = $seeker_id;
                $save->job_id = $job_id;                
                $save->save();
                
            }
            
        }
        $get_status = SeekerJobAppliedStatus::
            join('apply_status','seeker_job_applied_statuses.option_status_id','=','apply_status.id')
            // ->join('apply_status_option','seeker_job_applied_statuses.option_id','=','apply_status_option.id')
            ->where([['seeker_id',$seeker_id],['job_id',$job_id]])->get();
        // dd($get_status);    
    
        $data =[
            'apply_status' => DB::table('apply_status')->get(),
            'apply_status_option' => DB::table('apply_status_option')->get(),
            'job_id'=>$job_id,
            'seeker_id'=> $seeker_id,
            'heading' => 'Applicant Status',
            'seeker_job_app_status' => $get_status,
            // 'seeker_job_app_status' => SeekerJobAppliedStatus::where([['seeker_id',$seeker_id],['job_id',$job_id]])->get(),
            ];
        return view('employe.manage_status.manage_applied_status')->with($data);
    }
    public function edit_job_status(Request $request){
        // $seeker_info =seekerInformation::where('id','!=',null);
        // dd($seeker_info);
        //     if($request->keyword!=null){
        // $seeker_info->where('target_job_titles',$request->keyword);
                
        //     }
        
    }
    public function update_job_status(Request $request){
        // dd($request->all());
        
        $status_heading =  DB::table('apply_status')->where('id',$request->option)->first();
        $status_option =  DB::table('apply_status_option')->where('id',$request->option_status_id)->first();
        $save_status =$status_heading->name.'/'.$status_option->option_name; 
        
    
        $check = SeekerJobAppliedStatus::where([
            ['job_id',$request->job_id],
        ['seeker_id',$request->seeker_id],
        ['option_status_id',$request->option_status_id],
        ])->first();


            $save_history =  new Status_History();
            $save_history->status =$save_status;
            $save_history->user_id = Auth::user()->id;
            $save_history->date = date('m/d/Y');
            $save_history->seeker_id = $request->seeker_id;
            $save_history->save();
            
            $update = SeekerJobAppliedStatus::find($check->id);
            $update->option_id = $request->option;
            $update->date = date('m/d/Y');
            $update->save();
            session()->flash('success','Updated Successfully!');
            
        // }else{
            
        // $insert = new SeekerJobAppliedStatus();
        // $insert->job_id = $request->job_id;
        // $insert->seeker_id = $request->seeker_id;
        // $insert->option_status_id = $request->option_status_id;
        // $insert->option_id = $request->option;
        // $insert->save();
        // session()->flash('success','Updated Successfully!');
        // }
        $url = 'edit_status/'.$request->job_id.'/'.$request->seeker_id;
        return redirect()->to($url);        
    }
    public function employe_search_resume(){
            // $seeker_info =seekerInformation::
            //     leftJoin('job_seekers','seeker_information.user_id','=','job_seekers.user_id')
            //     ->join('job_categories','seeker_information.job_category','=','job_categories.id')
            //     ->leftJoin('sub_categories','seeker_information.sub_category','=','sub_categories.id')
            //     ->join('countries','job_seekers.country','=','countries.id')
            //     ->get();
                
               $seeker_info = JobSeeker::
                   join('seeker_information','job_seekers.user_id','=','seeker_information.user_id')
                   ->join('job_categories','seeker_information.job_category','=','job_categories.id')
                   ->get();
            // dd($seeker_info);
        
        $data = [
                'all_country'=> Country::get(),
            'all_category' => jobCategory::get(),
            'heading' => 'Search Resume',
            'all_seeker'=>$seeker_info,

            ];
            // dd($data);
        return view('employe.search_resume')->with($data);
    }
    public function employe_resume_search(Request $request){
               $seeker_info = JobSeeker::
                   join('seeker_information','job_seekers.user_id','=','seeker_information.user_id')
                   ->join('job_categories','seeker_information.job_category','=','job_categories.id');


            // $seeker_info =JobSeeker::join('countries','job_seekers.country','=','countries.id');
        
            if($request->email!=null){
                $seeker_info->where('email',$request->email);
            }

            if($request->first_name!=null){
                $seeker_info->where('firstname',$request->first_name);
            }
            if($request->last_name!=null){
                $seeker_info->where('lastname',$request->last_name);
            }
            if($request->zip_code!=null){
                $seeker_info->where('zip',$request->zip_code);
            }
            if($request->country!=null){
                $seeker_info->where('country',$request->country);
            }
             if($request->category!=null){
                $seeker_info->where('job_category',$request->category);
            }
            
            $data = [

                'heading' =>'Search Resume', 
                'all_seeker'=>$seeker_info->get(),
                'all_country'=> Country::get(),
                'all_category' => jobCategory::get(),
                'keyword' => $request->keyword,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,         
                'email' => $request->email,
                'zip_code' => $request->zip_code,
                'experience' => $request->experience,
                ];
        return view('employe.search_resume')->with($data);
            
    }
    
    public function history($seeker_id){
        
        
        $data = [
            'heading' => 'History',
            'history' => Status_History::join('users','status__histories.user_id','=','users.id')
            ->select('users.name','status__histories.*')
                ->where('seeker_id',$seeker_id)->get(),
            ];
            
        return view('employe.applicant_tracking.history')->with($data);
        
    }
        public function employe_import(){
        
        return view('employe.import_jobs');
        
    }
     public function uploadusers(){
        //  dd(request()->file('users'));
        //   request()->validate([
        //     'users' => 'required|mimes:xlx,xls|max:2048'
        // ]);
                Excel::import(new UsersImport,request()->file('users'));
                    dd('fd');
        // return back()->with('massage', 'User Imported Successfully');
         
     }
     public function status_history(){
         dd('hy');
     }

}

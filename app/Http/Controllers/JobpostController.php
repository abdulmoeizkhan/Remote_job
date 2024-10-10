<?php

namespace App\Http\Controllers;

use App\Models\Jobpost;
use App\Models\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Favjob;
use App\Models\Employee;
use App\Models\JobType;
use App\Models\JobExperience;
use App\Models\job_apply;
use App\Models\jobCategory;
use App\Models\Sub_category;
use App\Models\Article;

use App\Models\{Country,State,Save_Search};
use Illuminate\Support\Facades\DB;
class JobpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     
    public function index()
    {
        //  dd('hi');
         $data['jobs']=Jobpost::where("status",'1')->limit(3)->get();
         $data['category']=jobCategory::get();
         $data['countries']=Country::get();
          $data['articles']=Article::get();
         
         return view("index")->with($data);
         
    }
    // user_fav_jobs
    public function favjobs(Request $request){
            // mani
             $user_id =Auth::user()->id;
             $job_id=$request->id;
        $check = Favjob::where('user_id',$user_id)->where('job_id',$job_id)->first();
        // dd($check);
        if($check!=null){
            // dd($request->id);
                         
             Favjob::where('id',$check->id)->delete();
        }
        else{
                     
               $fav_job = new Favjob();
               $fav_job->user_id = $user_id;
               $fav_job->job_id = $job_id;
               $fav_job->save();
        } 
            
        
    }
    
    public function findjobs(Request $request){
            // mani
            $check_user = Auth::user();
            if($check_user!=null){
                
            
            $id =Auth::user()->id;
                if ($request->keyword!=null AND $request->job_country!=null) {
                    $check= Save_Search::where([
                        ['user_id',$id],
                        ['keyword',$request->keyword],
                        ['country',$request->job_country],                        
                        ])->first();
                            if($check==null){
                                $save_search = new Save_Search();
                                $save_search->user_id = $id;
                                $save_search->keyword = $request->keyword;
                                $save_search->country = $request->job_country;
                                $save_search->save();
                                
                            }
                    
                    }
        }

        //   $invoice =   DB::table('jobposts')->where('active-status',0);
             $invoice =   DB::table('jobposts');
        if ($request->keyword!=null) {
            $invoice->where('title', 'LIKE', '%' . $request->input('keyword') . '%');
        }
        if ($request->job_country!=null){
            $invoice->where('country',$request->job_country);
        }
        
        $data = [
            'jobs' => $invoice->get(),
            'category'=>jobCategory::get(),
            'countries'=>Country::get(),
            'search_keyword'=>$request->keyword,            
            'search_country' => $request->job_country, 
            
            ];
        // dd($request->all());
        
        return view("find-job",$data);
    }
    public function singleJob(Request $request){
        $id=$request->input("id");
        $data['jobs']=Jobpost::find($id);
        return view("single-job-description",$data);

    }
    public function companies(){
        $data['companies']=Employee::where('status','1')->get('id','company_name','firstname','logo','address','email');
       
        return view('companies',$data);
    }
    public function jobByCom($id){
         $data['jobs']=Jobpost::where("status",'1')->where('user_id',$id)->get();
         return view('job-by-company',$data);
    }
  public function category(){
      $data['companies']=DB::select("select * FROM job_categories where status=1");
      
        return view('view-job-category',$data);
  }
  public function jobByCategory($id){
      $data['jobs']=Jobpost::where("status",'1')->where('job_category',$id)->get();
         return view('job-by-company',$data);
  }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){

        $request->validate([
            'title' => 'required',
            'job_reference' => 'required',
            'country' => 'required',
            'state' => 'required',
          
            'location' => 'required',
            'salary' => 'required',
            'maxsalary' => 'required',
            'job_skill' => 'required',
            'job_category' => 'required',
            'sub_category' => 'required',
            'job_summary' => 'required',
          
            'responsibilities' => 'required',
            'qualifications' => 'required',
            'benefits' => 'required',
            'schedule' => 'required',
            'url_apply_online' => 'required',
            'website_url' => 'required',
            'TREF_email_address' => 'required',
            'job_type' => 'required',
            'experience' => 'required',
            'posting_Date' => 'required',
            'expiry_Date' => 'required',
            'company_name' => 'required',
            'no_emp' => 'Required',
            'job_auto_renew' => 'Required'
               
               ]);
          
         $user=Auth::user()->id;
        $logo=Employee::find($user);
        $userId=Auth::user()->id;
        $currentDate = Carbon::now();
        $futureDate = $currentDate->addDays(30);
        $jobpost = new Jobpost;
        $jobpost->futureDate = $futureDate->format('Y-d-m');
        
        $jobpost->user_id =  $userId;
        $jobpost->title = $request->title;
        $jobpost->job_reference = $request->job_reference;
        $jobpost->country = $request->country;
        $jobpost->state = $request->state;
        $jobpost->location = $request->location;
        $jobpost->salary = $request->salary;
        $jobpost->maxsalary =$request->maxsalary;
        $jobpost->job_skill = $request->job_skill;
        $jobpost->job_category = $request->job_category;
        $jobpost->sub_category = $request->sub_category;
        $jobpost->job_summary = $request->job_summary;
        $jobpost->job_description = $request->job_description;
        $jobpost->responsibilities = $request->responsibilities;
        $jobpost->qualifications = $request->qualifications;
        $jobpost->benefits = $request->benefits;
        $jobpost->schedule = $request->schedule;
        $jobpost->url_apply_online = $request->url_apply_online;
        $jobpost->website_url = $request->website_url;
        $jobpost->TREF_email_address = $request->TREF_email_address;
        $jobpost->job_type = $request->job_type;
        $jobpost->experience = $request->experience;
        $jobpost->posting_Date = $request->posting_Date;
        $jobpost->expiry_Date = $request->expiry_Date;
        $jobpost->company_name = $request->company_name;
          $jobpost->no_emp = $request->no_emp;
        $jobpost->job_auto_renew = $request->job_auto_renew;
        $jobpost->residelocation = $request->residelocation;
        $jobpost->specificlocaiton = $request->specificlocaiton;
                $jobpost->company_id = Auth::user()->company_id;
                    $jobpost->phone_number = $request->phone_number;
        // $jobpost->logo = $logo->logo;

        $jobpost->save();
        
        $data = [
            'job_data' => Jobpost::find($jobpost->id),
            ];
                       return view("employe.job-preview")->with($data);
        //  return redirect("employe-job-preview")->with($data);
        // return redirect("employe-dashboard");

    }
    
    public function updatePost(Request $request){
        // dd($request->all());
        // dd(/);
        $request->validate([
            'title' => 'required',
            'job_reference' => 'required',
            'country' => 'required',
            'state' => 'required',
          
            'location' => 'required',
            'salary' => 'required',
            'maxsalary' => 'required',
            'job_skill' => 'required',
            'job_category' => 'required',
            'sub_category' => 'required',
            'job_summary' => 'required',
          
            'responsibilities' => 'required',
            'qualifications' => 'required',
            'benefits' => 'required',
            'schedule' => 'required',
            
           
            'job_type' => 'required',
            'experience' => 'required',
            'posting_Date' => 'required',
            'expiry_Date' => 'required',
            'company_name' => 'required',
            'no_emp' => 'Required',
            
               
               ]);
               
        
       $jobpost = Jobpost::find($request->id);
       $jobpost->title = $request->title;
       $jobpost->job_reference = $request->job_reference;
       $jobpost->country = $request->country;
       $jobpost->state = $request->state;
       $jobpost->location = $request->location;
       $jobpost->salary = $request->salary;
       $jobpost->maxsalary =$request->maxsalary;
       $jobpost->job_skill = $request->job_skill;
       $jobpost->job_category = $request->job_category;
       $jobpost->sub_category = $request->sub_category;
       $jobpost->job_summary = $request->job_summary;
       $jobpost->job_description = $request->job_description;
       $jobpost->responsibilities = $request->responsibilities;
       $jobpost->qualifications = $request->qualifications;
       $jobpost->benefits = $request->benefits;
       $jobpost->schedule = $request->schedule;
       $jobpost->url_apply_online = $request->url_apply_online;
       $jobpost->website_url = $request->website_url;
       $jobpost->TREF_email_address = $request->TREF_email_address;
       $jobpost->job_type = $request->job_type;
       $jobpost->experience = $request->experience;
       $jobpost->posting_Date = $request->posting_Date;
       $jobpost->expiry_Date = $request->expiry_Date;
       $jobpost->company_name = $request->company_name;
       $jobpost->no_emp = $request->no_emp;
       $jobpost->job_auto_renew = $request->job_auto_renew;
       $jobpost->save();
       session()->flash('success','job  Updated');
       return  redirect()->back();
    }
    
     public function edit($id){
        // dd($id);
        $data['job'] =Jobpost::find($id);
        $data['cat']=jobCategory::all();
        $data['sub_cat']=Sub_category::all();
        // dd($data['sub_cat']);
        $data['type']=JobType::all();
        $data['exp']=JobExperience::all();
        $data['countries']=Country::all();
        $data['states']=State::all();

        $uid = Auth::user()->email;
        // $id = Auth::user()->id;
        $data['emp'] = Employee::where('email','=',$uid)->first();
    // dd($data);
    return view('employe.editjobpost',$data);
    } 

    
    public function view(){
        
           return view("employe.job-preview");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(jobpost $jobpost)
    {
      return view("employe.job-preview");
    }


     
    public function jobdetail($id)
    {
        
        $check = View::where('job_id','=',$id)->first();
        
        if($check!=null){
        $add = $check->view + 1;    
        // dd($add);
        $view = View::find($check->id);
            $view->view = $add;
            $view->save();
        }
        else{
        $view = new View;
        $view->job_id= $id;
        $view->view= 1;
        $view->save();
        }
        // dd($id);
        $data["empdata"]=Jobpost::find($id);
        
        
        return view('job-detail',$data);
    }
    
     public function job_apply($userid,$jobid,$user_id)
    {
        $user_company_id =  User::find($user_id);
        // $data['empid']=Jobpost::all();
        // dd($data);
        // dd($userid,$jobid,$user_id);

        $apply = new job_apply;
        $apply->seeker_id=$userid;
        $apply->employee_id=$user_company_id->company_id;
        $apply->jobpost_id=$jobid;
// dd($apply);
        $apply->save();
        
        
        session()->flash('success','You Successfully Applied To This Job!');
    return redirect()->back();
    
    
    }
    /**
     * Show the form for editing the specified resource.
     */
     
    

    /**
     * Update the specified resource in storage.
     */
    public function check_job_for_email()
    {
             $job_send =  Jobpost::with(['country','state','category','sub_category'])->get();
        
         $email_search =  Save_Search::where('user_id',Auth::user()->id)->get();
        //  dd($email_search);
         foreach($email_search as $item){
        //  echo $item->keyword; 
              $job =  Jobpost::where('title', 'LIKE', '%' . $item->keyword . '%')->get();
                foreach($job as $jobs){
                    // echo $jobs->title;
                    $email_description[] = $jobs; 
                }
                // dd(count($job));
            
                
            
         }
        //  dd($email_description);
            // die();
        // if(Auth::user()){
             $details = [
        'title' => 'Mail from Remotephase',
        'body' => 'This is for testing email using smtp',
        'job_detail' =>$email_description     
    ];
        // dd($details);
        \Mail::to('moeizjust@gmail.com')->send(new \App\Mail\Job_send_email($details));
   
   
    dd("Email is Sent.");
   
    // }
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(Request $request, $id)
    {
        $products = Jobpost::find($request->id);
        $products->delete();
        return redirect()->back();

    }
    
         public function check_job()
    {
        $products = Jobpost::find($request->id);
        $products->delete();
        return redirect()->back();

    }
    
}

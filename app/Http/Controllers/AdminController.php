<?php

namespace App\Http\Controllers;
use Hash;
use Session;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\JobSeeker;
use App\Models\jobCategory;
use App\Models\Sub_category;
use App\Models\JobType;
use App\Models\CompanySubscription;
use App\Models\Jobpost;
use App\Models\State;
use App\Models\Country;
use App\Models\job_apply;
use App\Models\JobExperience;
use App\Models\Employee;
use App\Models\Article; 
use App\Models\Websilte_Email;
use DB;
class AdminController extends Controller
{
    public function index(){
        return view("admin.index");
    }
    
     public function New_employer_account_bymonth(){
         
        //dd("");
    $data['applicants']=job_apply::join('job_seekers','job_seekers.user_id','=','job_applies.seeker_id')
        ->leftjoin('employees','employees.id','=','job_applies.employee_id')
        ->leftjoin('jobposts','jobposts.id','=','job_applies.jobpost_id')->whereMonth('job_applies.created_at', date('m'))
        ->select('job_applies.*',
        'job_seekers.firstname as applicant_name',
        'job_seekers.email as applicant_email',
        'job_seekers.mobile as phone',
        'jobposts.title as applicant_title',
        'jobposts.created_at as company_applied',
        'jobposts.company_name as company_name')->get();
        
        // dd($data['applicants']);
        return view('admin.reports.new_employer',$data);
         
     }
     public function Monthly_Expiring_Jobs(){
         
        //dd("");
    $data['applicants']=job_apply::join('job_seekers','job_seekers.user_id','=','job_applies.seeker_id')
        ->leftjoin('employees','employees.id','=','job_applies.employee_id')
        ->leftjoin('jobposts','jobposts.id','=','job_applies.jobpost_id')->whereMonth('job_applies.created_at', date('m'))
        ->select('job_applies.*',
        'job_seekers.firstname as applicant_name',
        'job_seekers.email as applicant_email',
        'job_seekers.mobile as phone',
        'jobposts.title as applicant_title',
        'jobposts.created_at as company_applied',
        'jobposts.company_name as company_name')->get();
        
        // dd($data['applicants']);
        return view('admin.reports.expired_bymonth',$data);
         
     }
    
    
    public function daily_applicants(){
        // dd("Check data");
    $data['applicants']=job_apply::join('job_seekers','job_seekers.user_id','=','job_applies.seeker_id')
        ->leftjoin('employees','employees.id','=','job_applies.employee_id')
        ->leftjoin('jobposts','jobposts.id','=','job_applies.jobpost_id')->whereDate('job_applies.created_at', Carbon::today())
        ->select('job_applies.*',
        'job_seekers.firstname as applicant_name',
        'job_seekers.email as applicant_email',
        'job_seekers.mobile as phone',
        'jobposts.title as applicant_title',
        'jobposts.created_at as company_applied',
        'jobposts.company_name as company_name')->get();
        
        // dd($data['applicants']);
        return view('admin.reports.daily_applications',$data);
    }
    public function Active_jobs_by_employer(){
                $data['jobs']=Jobpost::join('employees','employees.id','=','jobposts.company_id')
                ->join('job_categories','job_categories.id','=','jobposts.job_category')
                ->join('countries','countries.id','=','jobposts.country')
                ->join('job_types','job_types.id','=','jobposts.job_type')
                ->where('jobposts.active-status',0)
                 ->select('jobposts.id as job_id',
                 'jobposts.active-status as status',
                 'jobposts.title','jobposts.created_at',
                 'jobposts.futureDate as futureDate',
                 'jobposts.company_name as name',
                 'jobposts.job_description as description',
                 'job_categories.name as category',
                 'countries.name as country_name',
                 'job_types.type as type',
                 'employees.logo as logo',
                 'jobposts.active-status as status',
                 'jobposts.posting_Date as posting_Date')->get();
                //  dd($data['jobs']);
        return view('admin.reports.active_job_employer',$data);
    }
    
    public function admin_manage_applicants(){
        $data['applicants']=job_apply::join('job_seekers','job_seekers.user_id','=','job_applies.seeker_id')
        ->leftjoin('employees','employees.id','=','job_applies.employee_id')
        ->leftjoin('jobposts','jobposts.id','=','job_applies.jobpost_id')
        ->select('job_applies.*',
        'job_seekers.firstname as applicant_name',
        'job_seekers.email as applicant_email',
        'job_seekers.mobile as phone',
        'jobposts.title as applicant_title',
        'jobposts.created_at as company_applied',
        'jobposts.company_name as company_name')->
        get();
        // dd($data['applicants']);
        return view("admin.manage_applicants/all_applicants",$data);
    }
    
    
    public function admin_alljobs(){
        $data['jobs']=Jobpost::join('employees','employees.id','=','jobposts.company_id')
        ->select('jobposts.id as job_id','jobposts.active-status as status','jobposts.title','jobposts.posting_Date as posting_Date','jobposts.futureDate', 'employees.company_name as name')
        ->get();
        
        // dd($data['jobs']);
        
        return view("admin.manage_jobs/admin_alljobs",$data);
    }
    
         public function detail($id){
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
        
    // dd($data['job']);
    return view('admin.manage_jobs.jobdetail',$data);
    } 
    
    
    public function admin_job_detail(Request $request){
    // $uid = Auth::user()->email;
    // dd($request);
    Jobpost::where('id','=',$request->id)->update([
            'expiry_Date' => $request->expiry_Date,
            'posting_Date' => $request->posting_Date
            ]);
    return redirect()->back();
            
    }
    
    public function admin_activejobs(){
        $data['jobs']=Jobpost::join('employees','employees.id','=','jobposts.company_id')->where('jobposts.active-status',0)
        ->select('jobposts.id as job_id',
                 'jobposts.active-status as status',
                 'jobposts.title','jobposts.created_at',
                 'jobposts.futureDate as futureDate',
                 'jobposts.active-status as status',
                 'jobposts.posting_Date as posting_Date',
                 'employees.company_name as name')->get();
        
        // dd($data['jobs']);
        
        return view("admin.manage_jobs/admin_activejobs",$data);
    }
    
    public function admin_expiredjobs(){
                $data['jobs']=Jobpost::join('employees','employees.id','=','jobposts.company_id')->where('jobposts.exp_status',0)
                ->select('jobposts.id as job_id',
                 'jobposts.active-status as status',
                 'jobposts.title','jobposts.created_at',
                 'jobposts.futureDate as futureDate',
                 'jobposts.active-status as status',
                 'jobposts.posting_Date as posting_Date',
                 'employees.company_name as name')->get();
        
        // dd($data['jobs']);
        
        return view("admin.manage_jobs/.admin_expiredjobs",$data);
    }
    
    public function seekerlist(){
        //  $data['seeker'] =JobSeeker::all();
        
             $data['seeker']=JobSeeker::join('countries','job_seekers.country','=','countries.id')
             ->leftJoin('states','job_seekers.state','=','states.id')
             ->select('job_seekers.*','countries.name as country_name','states.name as states_name')
             ->get();
        // dd($data['seeker']);
        return view('admin.seeker_manage/seekerlist',$data);
    }
    
    public function status($id,$status){
        
        // dd($id,$status);
        JobSeeker::where('id', $id)->update([
            'active_status' => $status
            ]);
            
        if($status==0){
         session()->flash('success','Job status Active');
         return redirect('admin_view_seeker');
        }
        else{
             session()->flash('success','Job status DeActive');
         return redirect('admin_view_seeker');
        }
        return redirect()->back();
        
    }
    
    public function paidseeker(){
             $data['seeker'] =JobSeeker::all();
        //  dd($data['seeker']);
        return view('admin.seeker_manage/paidseeker',$data);
    }
    
    
    public function admin_seeker_profile($id){
        // $data['detail'] = JobSeeker::find($id); 
        
        $data['detail'] = JobSeeker::join('countries','job_seekers.country','=','countries.id')
             ->leftJoin('states','job_seekers.state','=','states.id')->leftJoin('users','job_seekers.user_id','=','users.id')
             ->select('job_seekers.*','countries.name as country_name','states.name as states_name','users.last_login_at as last_login')
             ->where('job_seekers.id',$id)->first();
        // dd($data['detail']);
    
        return view('admin.seeker_manage.seekerprofile',$data);
    }
    
      public function admin_seeker_resume(Request $request, $id){
    
        // dd($id);
        
         $data['seekers'] = JobSeeker::find($id);
    
        // dd($data['seekers']);
        
        return view("admin.seeker_manage.seeker_resume",$data);
    }
    
    public function jobCategory(){
        
        $data['categories'] =jobCategory::get(["name","id"]);
        return view('admin.jobs.categories',$data);
        
    }
    
    
    
    public function addJobCategory(Request $request){
         $state=new jobCategory();
         $state->name=$request->input('name');
         $state->save();
         return redirect('admin-job-category');
    }

    
    
    public function updateJobCategory(Request $request){
        // dd($request->all());
         $state=jobCategory::find($request->id);
         $state->name=$request->input('name');
         $state->save();
         session()->flash('success','Category  Updated');
         return redirect('admin-job-category');
    }
    
        public function delete_category($id){
        // dd($id);
         $cat=jobCategory::find($id);
         $cat->delete();
         session()->flash('success','Job Category Delete');
         return redirect('admin-job-category');
    //   return redirect()->back();
        
    }
    
    public function sub_category(){
        // $data['states']=State::all();
        
        // $data['sub_cat']=DB::select('select sub_categories.*,job_categories.name as category from sub_categories join job_categories ON job_categories.id = sub_categories.category_id');
        $data['sub_cat']=Sub_category::join('job_categories','sub_categories.category_id','=','job_categories.id')
        ->select('sub_categories.*','job_categories.name')
        ->get();
        
            // all();
        // dd($data['sub_cat']);
        $data['category'] = JobCategory::get(["name","id"]);
        return view('admin.jobs.sub_category',$data);
    }
    
    
      public function addsub_category(Request $request){
        //   dd($request);
         $sub_category=new Sub_category();
         $sub_category->category_id=$request->input('country_id');
         $sub_category->sub_category=$request->input('sub_category');
         $sub_category->save();
         session()->flash('success',' Successfully add sub category!');
         return redirect('admin-sub_category');
    }
    
    public function editsub_category($id){
        // dd($id);
        $data['sub_cat']=DB::select("SELECT * FROM `sub_categories` WHERE `id` = $id");
        $data['category'] = JobCategory::get(["name","id"]);
        return view('admin.jobs/editsub_category',$data);
    }
    
      public function updatesub_category(Request $request){
        //  $state=new State();
        //  dd($request->subcat_id);
         $subcat=Sub_category::find($request->subcat_id);
         $subcat->category_id=$request->input('category_id');
         $subcat->sub_category=$request->input('sub_category');
         $subcat->save();
        
         session()->flash('success','Sub Category  Updated');
         return $this->sub_category();
    }
         public function deletesub_category($id){
        // dd($id);
         $sub_cat=Sub_category::find($id);
         $sub_cat->delete();
         session()->flash('success','Job Sub Category Delete');
         return redirect('admin-sub_category');
    //   return redirect()->back();
        
    }
    
    
    
    public function jobType(){
        $data['types'] =JobType::get(["type","id"]);
        return view('admin.jobs.type',$data);
    }
    
    public function addJobType(Request $request){
         $state=new JobType();
         $state->type=$request->input('type');
         $state->save();
         return redirect('admin-job-type');
    }
    public function updatejobType(Request $request){
        // dd($request->all());
         $state=JobType::find($request->id);
         $state->type=$request->input('type');
         $state->save();
         session()->flash('success','Job Type  Updated');
         return redirect('admin-job-type');
    }
    
    public function experience(){
        $data['experience']=JobExperience::all();
        return view('admin.jobs.experience',$data);
    }
    
    
    public function addExperience(Request $request){
        // dd($request);
        $state=new JobExperience();
         $state->min_exp=$request->input('min_exp');
            $state->max_exp=$request->input('max_exp');
         $state->save();
         return redirect('admin-job-experience');
    }
    
    public function updateExperience(Request $request){
         $state=JobExperience::find($request->id);
        // dd($request->all());
         $state->min_exp=$request->input('min_exp');    
         $state->max_exp=$request->input('max_exp');
         $state->save();
         session()->flash('success','experience  Updated');
         return redirect('admin-job-experience');
    }
      public function delete_experience(Request $request){
        // dd($request->id);
        $article = JobExperience::find($request->id);
        $article->delete();
        return redirect()->back();
    }
    
    public function AllEmployees(){
        $data['employees'] = Employee::orderBy('status', 'desc')->get();
        return view('admin.all-employees',$data);
    }
    
    public function ActiveEmployees(){
        $data['employees'] = Employee::where("status",'=','1')->orderBy('status', 'desc')->get();
        return view('admin.active-employees',$data);
    }
    
     public function InactiveEmployees(){
        $data['employees'] = Employee::where("status",'=','0')->orderBy('status', 'desc')->get();
        return view('admin.inactive-employees',$data);
    }
    public function EmployeesProfile($id){
        $data['company'] = Employee::find($id);
        return view('admin.employe-profile',$data);
    }
    
    public function billingRecord(){
        return view("admin.billing-record");
    }
    
    public function orderhistory(){
        
        $order['orders'] =  CompanySubscription::join('employees','employees.id','=','company_subscriptions.company_id')
        ->join('packages','packages.id','=','company_subscriptions.pkg_id')->select('company_subscriptions.id as id','company_subscriptions.created_at as created_at','employees.firstname as name','packages.name as pkg',
        'company_subscriptions.pkg_exp_date as expdate','packages.time_duration')->get();
        // dd($order['orders']);
        return view('admin.order.orderhistory',$order);
        
    }
    public function create_article(){
        
        // dd('create_article');
        
       return view("admin.add-article");
    }
    
    public function add_article(Request $request){
        
         $request->validate([
        'title' => 'required|max:54',
        'content' => 'required',
    ]);
        
        // dd($request);
         $article=new Article();
         $article->title=$request->title;
         $article->content=$request->content;
         $article->save();
         return redirect()->back();
    }
    public function view_article(){
        // dd($request);
          $data['articles'] = Article::all();
        //   dd($data['articles']);
         return view("admin.view-article",$data);
    }
    
    
    public function edit_article(Request $request){
        // dd($request->id);
      
        $data['article'] = Article::find($request->id);
         
         return view("admin.edit-article",$data);
    }
    public function update_article(Request $request){
        $request->validate([
        'title' => 'required|max:54',
        'content' => 'required',
    ]);
        // dd($request->id);
          $article= Article::find($request->id);
        // dd($request->all());
         $article->title=$request->input('title');
         $article->content=$request->input('content');
         $article->save();
        //  session()->flash('success','Policy Successfully Updated!');
            // return redirect()->to('/admin_privacy_policy');
         return redirect()->back();
    }

    public function delete_article(Request $request){
        // dd($request->id);
        $article = Article::find($request->id);
        $article->delete();
        return redirect()->back();
    }
    
    public function site_email(){
        dd('site_email');
    }
    
    public function privacy_policy(){
        $data = [
            'privacy_policy' => DB::table('privacy_policy')->where('id',1)->first(),
            'heading' => 'Privacy Policy',
            ];
        return view('admin.privacy_policy')->with($data);
    }
    public function update_privacy_policy(Request $request){
        //   dd($request->all());
            DB::table('privacy_policy')->where('id',1)->update([
            'content' =>$request->content 
            ]);
            
            session()->flash('success','Policy Successfully Updated!');
            return redirect()->to('/admin_privacy_policy');
    }
public function admin_term_condition(){
             $data = [
            'privacy_policy' => DB::table('term_condition')->where('id',1)->first(),
            'heading' => 'Term & Condition',
            ];
        return view('admin.term_condition')->with($data);
    }   
        public function update_term_condition(Request $request){
        
            DB::table('term_condition')->where('id',1)->update([
            'content' =>$request->content 
            ]);
            session()->flash('success','Term & Condition Successfully Updated!');
            return redirect()->to('/admin_term_condition');
    }
        public function website_email(){
            $data = [
                'heading' =>'Website Emails', 
                'email' =>Websilte_Email::where('id',1)->first(),
                ];
            return view('admin.website_email')->with($data);
        }
        public function update_website_email(Request $request){
            // dd($request->all());
            Websilte_Email::where('id',1)->update([
                'órder_email'=>$request->órder_email,
                'contact_email'=>$request->contact_email,
                'account_status_email'=>$request->account_email,
                'support_email'=>$request->support_email,
                ]);
            session()->flash('success','Emails Successfully Updated!');
            return redirect()->to('/admin_website_email');

            
        }

}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CategorySubCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobpostController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ScrapperController;


// use App\Http\Middleware\Admin;
// use App\Http\Middleware\Employe;
// use App\Http\Middleware\Seeker;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/employe',[EmployeController::class,'index']);
Route::get("/user-registration",[CustomAuthController::class,"jobSeeker"]);
Route::get("/employe-registation",[CustomAuthController::class,"employeReg"]);
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.user');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('login', [CustomAuthController::class, 'index'])->name('user-login');
Route::post("custom-login",[CustomAuthController::class,"customLogin"])->name('custom_login');

Route::get("Email_verification/{number}",[CustomAuthController::class,"email_verification"])->name('email_verification');

Route::get('/reload-captcha', [CustomAuthController::class, 'reloadCaptcha']);

Route::post("save-jobSeeker",[SeekerController::class,"create"]);
Route::post("save-employer",[EmployeController::class,"create"]);
Route::get("admin-auth",[LoginController::class,"adminLogin"]);
Route::post("admin-authentication",[LoginController::class,"auth"]);
Route::get('country-state-city',[CountryStateCityController::class,'index']);
Route::post('get-states-by-country',[CountryStateCityController::class,'getState']);

Route::post('get_sub_category',[CountryStateCityController::class,'get_sub_category']);
Route::post('get-cities-by-state',[CountryStateCityController::class,'getCity']);

Route::post('get_sub_category',[CategorySubCategoryController::class,'get_sub_category']);
Route::post('get-cities-by-state',[CategorySubCategoryController::class,'getCity']);
Route::get('/admin-delete-state/{id}',[CountryStateCityController::class,'delete_states']);

// delete_state

Route::get("arr",[CountryStateCityController::class,"arr"]);
// ----------------------fav-jobs------------------------------
Route::post("/user_fav_jobs",[JobpostController::class,"favjobs"]);

Route::post("seeker-single-job-description",[JobpostController::class,"singleJob"]);
Route::get("check_job_for_email",[JobpostController::class,"check_job_for_email"]);
Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.post');

Route::post('/purchase_pkg', [StripeController::class, 'purchase_pkg'])->name('purchase_pkg');


Route::get("/seeker-confirm",function(){
    return view("seeker.registration-msg");
});

Route::get("/",[JobpostController::class,'index']);
Route::get("/find-jobs",[JobpostController::class,'findjobs']);
// Route::get("/job-details",function(){
//     return view("job-detail");
// });
Route::get("/jobDetail/{id}",[JobpostController::class,"jobdetail"]);
Route::get("/apply/{userid}/{job_id}/{user_id}",[JobpostController::class,"job_apply"]);


Route::get("job-by-company",[JobpostController::class,'companies']);
Route::get("job-by-company/{id}",[JobpostController::class,'jobByCom']);
Route::get("job-by-category",[JobpostController::class,'category']);
Route::get("job-by-category/{id}",[JobpostController::class,'jobByCategory']);
// new route add
Route::get('seekerjobs',[SeekerController::class,'view']);



Route::get("/job-seeker-detail",function(){
    return view("seeker.detail");
});

Route::middleware([Seeker::class])->group(function(){

    Route::get('/job-seeker-dashboard',[SeekerController::class,'index'])->name("job-seeker-dashboard");
    Route::post('/seeker-information-update',[SeekerController::class,'updateinformation']);
    Route::get('/edit-seeker-general-information',[SeekerController::class,'editinformation']);
    Route::get('/seeker-general-information',[SeekerController::class,'viewinformation']);
    Route::get('/job-seeker-profile',[SeekerController::class,'Profile']);
    Route::post('/seeker-save-information',[SeekerController::class,'information']);
    Route::get("/seeker/saved-jobs",[SeekerController::class,'savedJobs']);
    Route::get('seeker-job-view',[SeekerController::class,'jobsview']);
    Route::get("/seeker/my-applicants",[SeekerController::class,'myJobs']);
    Route::post("/seeker/update-profile",[SeekerController::class,'updateProfile']);
    Route::get("/seeker/save-searches",[SeekerController::class,'saveSearches']);
    Route::get("/job-seeker-myresume",[SeekerController::class,'myresume']);
    Route::get("/edit-resume/{id}",[SeekerController::class,'editresume']);
    Route::post("/update-resume",[SeekerController::class,'updateresume']);

});

Route::middleware([Employe::class])->group(function(){
    Route::get("employe-dashboard",[EmployeController::class,"index"]);
    Route::get("employe/posted-jobs",[EmployeController::class,'view']);
    Route::get("employe/job-posting",[EmployeController::class,"createJob"]);
    Route::post("employe-job-posting",[JobpostController::class,"create"]);
    Route::get("employe-job-preview",[JobpostController::class,"view"]);
    Route::get("editjobpost/{id}",[JobpostController::class,"edit"]);
    Route::get("delete/{id}",[JobpostController::class,"destroy"]);
    Route::post("updatepost",[JobpostController::class,"updatePost"]);
    Route::get("/employe/active-jobs",[EmployeController::class,"ActiveJobs"]);
    Route::get("/employe/expired-jobs",[EmployeController::class,"ExpiredJobs"]);
    Route::get("/employe-job-applicants",[EmployeController::class,"Applicants"]);
    Route::get("/employe-view-resume/{id}",[EmployeController::class,"view_resume"]);
    Route::get("employe-edit-profile",[EmployeController::class,"editProfile"]);
    Route::get("employe-setting",[EmployeController::class,"employe_setting"]);
    Route::post("employe_setting_update",[EmployeController::class,"employe_setting_update"]);
    Route::get("employe_all_contacts",[EmployeController::class,"employe_all_contacts"]);
    
    Route::post("employe-update-profile",[EmployeController::class,"updateProfile"]);
    Route::get("employe-subscripttion-plans",[PackageController::class,"empSubcriptionPlans"]);
    Route::get("my-subscription-plans",[EmployeController::class,"my_subscription"]);
    Route::get("employe-all-resume",[EmployeController::class,"all_resume"]);
    Route::get("employe_all_users",[EmployeController::class,"employe_all_users"]);

    Route::get("employe_save_resume",[EmployeController::class,"employe_save_resume"]);
    Route::get("employe_save_cv/{id}",[EmployeController::class,"employe_save_cv"]);
    Route::get("employe_unsave_cv/{id}",[EmployeController::class,"employe_unsave_cv"]);    

Route::get("employe_import",[EmployeController::class,"employe_import"]);
Route::post('uploadusers', [EmployeController::class,"uploadusers"]);

Route::get("employe_search_resume",[EmployeController::class,"employe_search_resume"]);
Route::post("employe_resume_search",[EmployeController::class,"employe_resume_search"]);


Route::get("package-order-history",[EmployeController::class,"order_history"]);



// Route::get('export', 'EmployeController@export')->name('export');
// Route::get('importExportView', 'EmployeController@importExportView');

    Route::get("employe_all_applicantion",[EmployeController::class,"employe_all_applicantion"]);
    Route::get("applicant_search",[EmployeController::class,"date"]);

    Route::post("applicant_search",[EmployeController::class,"applicant_search"]);
    
    
    Route::get("employe_applicant_tracking",[EmployeController::class,"employe_applicant_tracking"]);
    Route::get("employee_view_seeker_details/{job_id}/{id}",[EmployeController::class,"employee_view_seeker_details"]);
    Route::get("select_candidate/{job_id}/{seeker_id}",[EmployeController::class,"select_candidate"]);
     Route::get("unselect_candidate/{job_id}/{seeker_id}",[EmployeController::class,"unselect_candidate"]);
Route::get("edit_status/{job_id}/{seeker_id}",[EmployeController::class,"edit_job_applied_status"]);
Route::post("update_job_status",[EmployeController::class,"update_job_status"]);


Route::post("edit_job_status",[EmployeController::class,"edit_job_status"]);

     Route::get("history/{seeker_id}",[EmployeController::class,"history"]);
     
    Route::get("buy_package/{id}",[EmployeController::class,"buy_package"]);
    
    
    Route::get("employe_add_users",[EmployeController::class,"employe_add_users"]);
    Route::get("employe_edit_user/{id}",[EmployeController::class,"employe_edit_user"]);
    
    
    
    Route::post("employe_save_user",[EmployeController::class,"employe_save_user"]);
    Route::post("employe_update_user",[EmployeController::class,"employe_update_user"]);
    
    
    Route::get("/employe-msg",function(){
        return view("employe.registration-msg");
    });
    
    Route::get("/employe-plans",function(){
        return view("employe.plans");
    });
    Route::get("resend-email",[EmployeController::class,"resendemail"]);

    
});

Route::middleware([Admin::class])->group(function(){
   Route::get("admin-dashboard",[AdminController::class,"index"]); 
   
   Route::get("/admin-countries",[CountryStateCityController::class,'index']);
   Route::post("/admin-add-country",[CountryStateCityController::class,'country']);
   Route::post("/admin-update-country",[CountryStateCityController::class,'updatecountry']);
   Route::get("/admin-delete-country/{id}",[CountryStateCityController::class,'delete_country']);

   
   
      Route::get("/admin-states",[CountryStateCityController::class,'states']);
   Route::post("/admin-add-state",[CountryStateCityController::class,'addStates']);
   Route::get("/admin-edit-state/{id}",[CountryStateCityController::class,'editstates']);
   Route::post("/admin-update-state",[CountryStateCityController::class,'updatestates']);
   Route::get("/admin-delete-state/{id}",[CountryStateCityController::class,'delete_states']);
      
      Route::get("/admin-sub_category",[AdminController::class,'sub_category']);
      Route::get("/admin-edit-sub_category/{id}",[AdminController::class,'editsub_category']);
      Route::post("/admin-sub_cat-updatesub_category",[AdminController::class,'updatesub_category']);
      Route::get("/admin-delete-sub_category/{id}",[AdminController::class,'deletesub_category']);

  
   
   Route::get("admin-job-category",[AdminController::class,'jobCategory']);
   Route::post("/admin-add-job-category",[AdminController::class,'addJobCategory']);
   Route::post("/admin-add-update-category",[AdminController::class,'updateJobCategory']);
   Route::get("/admin-delete-category/{id}",[AdminController::class,'delete_category']);
   Route::get("/admin-job-type",[AdminController::class,'jobType']);
   Route::post("/admin-update-jobtype",[AdminController::class,'updatejobType']);
   
   Route::post("/admin-sub_cat-state",[AdminController::class,'addsub_category']);
    

   
   Route::get("/admin-delete-jobtype/{id}",[AdminController::class,'delete_type']);
   Route::get("admin-job-type",[AdminController::class,'jobType']);
   Route::post("/admin-add-job-type",[AdminController::class,'addJobType']);
   
   
   Route::get("/admin-job-experience",[AdminController::class,'experience']);
   Route::post("/admin-add-job-experience",[AdminController::class,'addExperience']);
   Route::post("/admin-update-job-experience",[AdminController::class,'updateExperience']);
   Route::get("/admin-delete-experience/{id}",[AdminController::class,'delete_experience']);

   
   Route::get("/admin-all-employees",[AdminController::class,'AllEmployees']);
   Route::get("/admin-active-employees",[AdminController::class,'ActiveEmployees']);
   Route::get("/admin-inactive-employees",[AdminController::class,'InactiveEmployees']);
   Route::get("/admin-employee-profile/{id}",[AdminController::class,'EmployeesProfile']);
   Route::get("/admin-billing-record",[AdminController::class,"billingRecord"]);
   Route::get("/admin-order-history",[AdminController::class,"orderhistory"]);
   
   

   Route::get("/admin-all-article",[AdminController::class,"view_article"]);
   Route::get("/admin-create-article",[AdminController::class,"create_article"]);
   Route::post("/admin-add-article",[AdminController::class,"add_article"]);
   Route::get("/admin-edit-article/{id}",[AdminController::class,"edit_article"]);
   Route::post("/admin-update-article",[AdminController::class,"update_article"]);
   Route::get("/admin-delete-article/{id}",[AdminController::class,'delete_article']);
       
   Route::get("/admin_privacy_policy",[AdminController::class,"privacy_policy"]);
   Route::post("/update_privacy_policy",[AdminController::class,"update_privacy_policy"]);
   
   Route::get("/admin_term_condition",[AdminController::class,"admin_term_condition"]);
   Route::post("/update_term_condition",[AdminController::class,"update_term_condition"]);

   Route::get("/admin_website_email",[AdminController::class,"website_email"]);
   Route::post("/update_website_email",[AdminController::class,"update_website_email"]);
   
   
   
   Route::get("/admin_view_seeker",[AdminController::class,"seekerlist"]);
   Route::get("/seeker-active-status/{id}/{status}",[AdminController::class,"status"]);
   Route::get("/seeker-paid-seeker",[AdminController::class,"paidseeker"]);
   
   
   Route::get("/admin-view-seeker-profile/{id}",[AdminController::class,"admin_seeker_profile"]);
   Route::get("/admin-view-seeker-resume/{id}",[AdminController::class,"admin_seeker_resume"]);
   
   
   Route::get("/admin-manage-applicants",[AdminController::class,"admin_manage_applicants"]);
   
   Route::get("/admin-view-all-jobs",[AdminController::class,"admin_alljobs"]);
   Route::get("/admin-view-job-detail/{id}",[AdminController::class,"detail"]);
   Route::post("/admin-update-detail",[AdminController::class,"admin_job_detail"]);
   
   
   
   Route::get("/Monthly-Expiring-Jobs",[AdminController::class,"Monthly_Expiring_Jobs"]);
   Route::get("/all-daily-applicants",[AdminController::class,"daily_applicants"]);

   Route::get("/Active-jobs-by-employer",[AdminController::class,"Active_jobs_by_employer"]);
   
   Route::get("/admin-view-job-detail/{id}",[AdminController::class,"detail"]);
   Route::post("/admin-update-detail",[AdminController::class,"admin_job_detail"]);
   
   
   
   Route::get("/admin-view-Active-jobs",[AdminController::class,"admin_activejobs"]);
   Route::get("/admin-view-Expired-jobs",[AdminController::class,"admin_expiredjobs"]);
   
   
   Route::get("/admin-create-package",[PackageController::class,"create"]);
   Route::post("/admin-store-package",[PackageController::class,"store"])->name("admin-store-package");
   Route::get("/admin-package-list",[PackageController::class,"packages"]);
   
   Route::get("scrapper/linkedin",[ScrapperController::class,"linkedin"]);
   Route::get("scrapper/indeed",[ScrapperController::class,"indeed"]);
   Route::post("scrapper/scrape",[ScrapperController::class,"scrape"]);
  
});





// -----------------


// Route::get('/seeker/edit-profile/{id}',[SeekerController::class,'edit']);
// Route::post('/seeker/update',[SeekerController::class,'update']);


// Route::get("/seeker/edit-profile",function(){
//     return view("seeker.editprofile");
// });

Route::get("/jobs-by-location",function(){
    return view("jobs-by-location");
});








// ----------- new employee pages 16 june---------------


Route::get("/employe/all-jobs",function(){
    return view("employe.all_jobs");
});



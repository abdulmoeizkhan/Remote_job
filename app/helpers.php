<?php
use Illuminate\Support\Facades\DB;
use App\Models\Jobpost;
use App\Models\User;

if (!function_exists('CountryName')) {
    function CountryName($name)
    {
       
        return ucfirst($name);
    }
}

if (!function_exists('JobType')) {
    function JobType($id)
    {
        $jobs= DB::select("SELECT type FROM job_types where id='$id'");
        if($jobs){
        foreach($jobs[0] as $j){
            
        }
        return $j;
        }
        return "remote";
    }
}

if (!function_exists('employeeImg')) {
    function employeeImg($email)
    {
        $jobs= DB::select("SELECT logo FROM employees where email='$email'");
        if(empty($jobs)){
            return 1;
        }
        else{
             foreach($jobs[0] as $j){
            
        }
        
        return $j;
        }
        
       
    }
}

if (!function_exists('JobCategory')) {
    function JobCategory($id)
    {
        $jobs= DB::select("SELECT name FROM job_categories where id='$id'");
               
        foreach($jobs[0] as $j){
        }
        return $j;
    }
}

if (!function_exists('ActiveJobs')) {
    function ActiveJobs($id)
    {
        $jobs= Jobpost::where('user_id','=',$id)->count();
        
        return $jobs;
    }
}
if (!function_exists('isEmailVerified')) {
    function isEmailVerified($email)
    {
        $jobs= User::where('email','=',$email)->first('email_verified');
        foreach($jobs as $j){
           if($jobs->email_verified==1){
            return 1;
        }
        else{
            return 0;
        }
        }
    }
}

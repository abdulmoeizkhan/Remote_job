<?php

namespace App\Imports;

use App\Models\Test_Job;
use App\Models\Jobpost;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Auth;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         // dd($row);
        // if($row[0]!='dname'){
            
        // dd($row[0]);
        // }
        // dd('mani');
        
        // $check = Test_Job::where('title',$row[0])->first();
         if($row[0]!='title'){
            return new Jobpost([
            'title' => $row[0],
            'job_reference' =>$row[1],
            'country' =>$row[2],            
            'location' =>$row[3],
            'salary' =>$row[4],
            'job_skill' =>$row[5],
            'job_category' =>$row[6],
            'sub_category' =>$row[7],
            'job_summary' =>$row[8],
            'job_description' =>$row[9],
            'responsibilities' =>$row[10],
            'qualifications' =>$row[11],
            'benefits' =>$row[12],
            'schedule' =>$row[13],
            'url_apply_online' =>$row[14],
            'website_url' =>$row[15],
            'TREF_email_address' =>$row[16],
            'job_type' =>$row[17],
            'experience' =>$row[18],
                        'no_emp' =>$row[19],
            'expiry_Date' =>  date('Y-m-d'),
            'posting_Date' =>date('Y-m-d'),
            'futureDate' =>date('Y-m-d'),
            'company_id' => Auth::user()->company_id
            ]);             
         }

    }
}
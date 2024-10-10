<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobpost extends Model
{
    use HasFactory;
 
  protected $fillable = [
      					   'title',
                           'job_reference',
                           'country',
                           'state',
                           'location',
                           'salary',
                           'job_skill',
                           'job_category',
                           'sub_category',
                           'job_summary',
                           'job_description',
                           'responsibilities',
                           'qualifications',
                           'benefits',
                           'schedule',
                           'url_apply_online',
                           'website_url',
                           'TREF_email_address',
                           'job_type',
                           'experience',
                           'expiry_Date',
                           'posting_Date',
                           'job_auto_renew',
                           'user_id',
                           'company_name',
                           'no_emp',
                           'maxsalary',
                           'active-status',
                           'company_id',
                           'futureDate',
                           'exp_status',
                           'residelocation',
                           'specificlocaiton',
                           'phone_number',
                           'futureDate',
                          ];
        public function country() {
            return $this->belongsTo(Country::class,'country');
        }
        public function state() {
            return $this->belongsTo(State::class,'state');
        }
        public function category() {
            return $this->belongsTo(jobCategory::class,'job_category');
        }
                public function sub_category() {
            return $this->belongsTo(Sub_category::class,'sub_category');
        }

}

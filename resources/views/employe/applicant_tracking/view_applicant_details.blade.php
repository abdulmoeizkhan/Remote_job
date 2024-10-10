@extends('layout.employer')
@section('title', 'Affilly')
@section('content')
    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    @if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
       @if(Session::has('danger'))
<p class="alert alert-danger">{{ Session::get('danger') }}</p>
@endif
<div class="col-12">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">{{@$heading}}</h4>
							<a href="{{ url('employe-view-resume/'.$info->id) }}" class="btn btn-primary">View Resume</a>
						</div>
					</div>
				  </div>
				</div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
<div class="col-sm-12">
    <div class="container">
  <div class="row">

            <div class="col-9">
          <a href="{{url('history/'.$info->user_id)}}" class="btn btn-primary">History</a>
          @if($check_selected==null)
          <a href="{{url('select_candidate/'.$jobpost_id.'/'.$info->user_id)}}" class="btn btn-primary">Select Candidate</a>
            @else
            
          <a href="{{url('unselect_candidate/'.$jobpost_id.'/'.$info->user_id)}}" class="btn btn-warning">Un-Select Candidate</a>

            @endif
         <a href="#" class="btn btn-primary">Contact</a>
         <a href="{{ url('edit_status/'.$jobpost_id.'/'.$info->user_id) }}" class="btn btn-primary">Edit Status</a>

      </div>
      <!--<input type="hidden" value="" name="applicant_id">-->
      <div class="col-3">
      <!--<form method="POST" action={{url('employee_save_application')}}>-->
      <!--<input type="hidden" value="{{$info->user_id}}" name="applicant_id">-->
      <!--<input type="hidden" value="{{$jobpost_id}}" name="job_id">-->

            <!--        <label>Edit Status</label>-->
            <!--<select class="form-select">-->
            <!--    <option>Set To New</option>-->
            <!--    <option>In Process</option>-->
            <!--    <option>Selected</option>-->
            <!--    <option>Rejected</option>-->
            <!--</select>-->
      <!--</form>-->

      </div>
</div>
  <div class="row">
    <div class="col-md-9 mx-auto">
        <h1 class="resume-heading">Seeker Information</h1>
    </div>

</div>

    <div class="row">

        <div class="col-md-9 mx-auto">
		<!-- Below Alert message File path is class/message_stack.php -->
		<table border="0" width="100%" cellspacing="0" cellpadding="3">
</table>

            <div class="card card-custom">
                <div class="card-body card-body-custom">
        <form  action="{{url('/seeker-save-information')}}" method="POST">
        
 @csrf

  <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Seeker name :</label>
    <div class="col-sm-9">
      <input type="text" value="{{@$basic_details->name}}" name="resume_name"  size="46" class="form-control required" fdprocessedid="vbxqm" disabled>
    </div>
  </div>
  <!--  <div class="form-group row align-items-center">-->
  <!--  <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Applied For :</label>-->
  <!--  <div class="col-sm-9">-->
  <!--    <input type="text" value="{{@$basic_details->name}}" name="resume_name"  size="46" class="form-control required" fdprocessedid="vbxqm">-->
  <!--  </div>-->
  <!--</div>-->
    <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Email :</label>
    <div class="col-sm-9">
      <input type="text" value="{{@$basic_details->email}}" size="46" class="form-control required" fdprocessedid="vbxqm" disabled>
    </div>
  </div>

  <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Resume name :</label>
    <div class="col-sm-9">
      <input type="text" value="{{@$info->resume_name}}" name="resume_name"  size="46" class="form-control required" fdprocessedid="vbxqm" disabled>
    </div>
  </div>

  


<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Objective :</label>
    <div class="col-sm-9">
      <textarea name="objective"  wrap="soft" cols="60" rows="5" class="form-control h-100" disabled>
          {{@$info->objective}}
          
      </textarea>
    </div>
</div>

<div class="form-groups row align-items-center">
    <label for="staticEmail" class="col-sm-3 text-success fw-bold mb-2  m-text-start">Job Target </label>
    <div class="col-sm-9"></div>
  </div>


<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Job Type :</label>
    <div class="col-sm-9 d-flex">
         <?php
         $decode = json_decode($info->job_type);
          
          foreach($decode as $item){
          $job_type = App\Models\JobType::where('id',$item)->first();   
         
              echo '<span>'.$job_type->type.',</span>';
          }
         ?> 
	
    </div>
</div>

<div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Desired Salary :</label>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-12">
            
         {{@$info->expected_salary}}/- {{@$currency->name}}    

    @if(@$info->expected_salary_per==1)
	<span class="me-3">
		<label class="form-check-label" for="expected_salary_per1">Yearly</label>
	</span>
	@elseif(@$info->expected_salary_per==2)
	<span class="me-3">
		<label class="form-check-label" for="expected_salary_per2">Monthly</label>
	</span>
	@elseif(@$info->expected_salary_per==3)
	<span class="me-3">
		<label class="form-check-label" for="expected_salary_per3">Hourly</label>
	</span>
	@else
	
	@endif
	    </div>
 
      </div>
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Target Job Titles :</label>
    <div class="col-sm-9">
      <input type="text" name="target_job_titles" value="{{@$info->target_job_titles}}" class="form-control required" size="46" fdprocessedid="gsd4w " disabled>
    </div>
</div>

<!--<div class="form-group row align-items-center">-->
<!--    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Job Category :<br>(select up to 5) </label>-->
<!--    <div class="col-sm-9">-->
<!--      <select name="industry_sector[]" class="form-control required h-100" size="5" multiple="" fdprocessedid="l7e3a6"><option value="21">Accounting/Finance/Banking</option><option value="1">Administration/HR/Legal</option><option value="22">Advertising/Marketing/PR</option><option value="3">Arts &amp; Design</option><option value="2">Automotive</option><option value="14">Aviation/Airlines</option><option value="15">Call Centre/BPO</option><option value="13">Construction/Architecture</option><option value="23">Consulting Services</option><option value="4">Courier/Distribution/Logistics</option><option value="24">CustomerSupport/Telemarketing</option><option value="25">Education/Training</option><option value="26">Engineering/Manufacturing</option><option value="27">Entertainment/Media</option><option value="5">Environmental</option><option value="16">Export/Import</option><option value="28">Fashion/Garments</option><option value="12">Food Industry</option><option value="29">Government Services</option><option value="30">HealthCare/Pharma</option><option value="31">Hospitality/Travel/Tourism</option><option value="7">Insurance</option><option value="8">Internet/E-Commerce</option><option value="32">IT/Hardware</option><option value="33">IT/Software</option><option value="9">Legal/Company Secretarial</option><option value="34">Maintenance/Repair</option><option value="10">Media/Publishing</option><option value="42">oil,gas &amp; power</option><option value="35">Oil/Gas/Utilities</option><option value="17">Others</option><option value="36">Production/Operations</option><option value="18">Purchase/ Supply Chain</option><option value="6">Recruitment/HR</option><option value="37">Retail/Wholesale</option><option value="38">Sales/Business Development</option><option value="39">Science/Research/Development</option><option value="11">Sports and Recreation</option><option value="40">Supply Chain/Logistics</option><option value="19">Telecom/ ISP</option><option value="41">Transportation/Warehousing</option><option value="20">Travel/ Airlines</option></select>-->
<!--    </div>-->
<!--</div>-->

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">City / State / Country</label>
    <div class="col-sm-9">
	  {{@$seeker_detail->city}} / {{@$seeker_detail->state_name}} / {{@$seeker_detail->country_name}}
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Willing to relocate :</label>
    <div class="col-sm-9 d-flex">
      <input type="radio" name="relocate" value="Yes" checked="" id="radio_relocate1" class="form-check-input me-1">
	  <label class="form-check-label me-3" for="radio_relocate1">Yes</label>
	  <input type="radio" name="relocate" value="No" id="radio_relocate2" class="form-check-input me-1">
	  <label class="form-check-label me-3" for="radio_relocate2">No</label>
    </div>
</div>
  <div class="form-group">
                                    <label for="icon" class="control-label mb-1">Long Description</label>
                                    <textarea class="form-control" id="body" placeholder="Enter the Description" name="description" rows="3" disabled>{!! $info->description !!}</textarea>
                                </div>
  <div class="form-groups row align-items-center">
    <label for="staticEmail" class="col-sm-3 text-success fw-bold mb-2  m-text-start">Social Account </label>
    <div class="col-sm-9"></div>
  </div>


<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Facebook URL :</label>
    <div class="col-sm-9">
      <input type="text" name="facebook_url" value="{{@$info->facebook_url}}" size="60" class="form-control" fdprocessedid="sfp19o" disabled>
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Instagram URL :</label>
    <div class="col-sm-9">
      <input type="text" name="instagram_url" value="{{@$info->instagram_url}}" size="60" class="form-control" fdprocessedid="ivyh88" disabled>
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">LinkedIn URL :</label>
    <div class="col-sm-9">
      <input type="text" name="linkedin_url" size="60" value="{{@$info->linkedin_url}}" class="form-control" fdprocessedid="vmn6s5" disabled>
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Twitter URL :</label>
    <div class="col-sm-9">
      <input type="text" name="twitter_url" size="60" value="{{@$info->twitter_url}}" class="form-control" fdprocessedid="leq4nk" disabled>
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom"></label>
    <div class="col-sm-9 m-text-center">
      <!--<button class="btn btn-primary " style="colo:white;" type="submit" >Next</button> -->
   <!--<input type="submit" name="submit" id="">-->
	</div>
</div>


</form>

                </div>
            </div>
        </div>

    </div>
</div>

</div>


                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
    </div>
@endsection

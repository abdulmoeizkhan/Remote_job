@extends('layout.employer')
@section('title', 'Affilly')
@section('content')

    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
             
                <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="row">
            <div class="col-md-12">
                <h1 class="main-heading ">Preview Job</h1>
            </div>
        </div>
		<table border="0" width="100%" cellspacing="0" cellpadding="3">
</table>

            <div class="card card-custom border shadow-sm">
                <div class="card-body card-body-custom">

							 <form name="preview_job" action="https://remotephase.com/post_job.php" method="post" onsubmit="return ValidateForm(this)">

  <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job title :</label>
    <div class="col-sm-9">
      {{ @$job_data->title }}
    </div>
  </div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job reference :</label>
    <div class="col-sm-9">
      {{ @$job_data->job_reference }}

    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Country :</label>
    <div class="col-sm-9">
      Bermuda
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">State</label>
    <div class="col-sm-9">
      Not Mentioned
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Location :</label>
    <div class="col-sm-9">
      {{ @$job_data->location }}
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Salary :</label>
    <div class="col-sm-9">
      <div class="input-group-prepend d-inline-block mr-1">
    <span class="input-group-text" id="basic-addon1">$</span>
  </div>       {{ @$job_data->salary }}

    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job Skills:</label>
    <div class="col-sm-9">
      {{ @$job_data->job_skill }}
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job Category :</label>
    <div class="col-sm-9">
      Administration/HR/Legal
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job Summary :</label>
    <div class="col-sm-9">
      {{ @$job_data->job_summary }}

    </div>
	</div>

	<div class="form-group row align-items-top">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job Description :</label>
    <div class="col-sm-9">
      <p>      {{ @$job_data->job_description }} </p>
    </div>
	</div>

  <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Responsibilities :</label>
    <div class="col-sm-9">
      {{ @$job_data->responsibilities }}
    </div>
  </div>
  <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Qualifications :</label>
    <div class="col-sm-9">
      {{ @$job_data->qualifications }}
    </div>
  </div>
  <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Benefits :</label>
    <div class="col-sm-9">
      {{ @$job_data->benefits }}
    </div>
  </div>
  <div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Schedule :</label>
    <div class="col-sm-9">
      {{ @$job_data->schedule }}

    </div>
  </div>


	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Resumes will go :</label>
    <div class="col-sm-9">
      {{ @$job_data->website_url }}
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job type :</label>
    <div class="col-sm-9">
      Contract
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Experience  :</label>
    <div class="col-sm-9">
      Any experience
    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Job Expiry Date :</label>
    <div class="col-sm-9">
      {{ @$job_data->expiry_Date }}

    </div>
	</div>

	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark">Posting Date :</label>
    <div class="col-sm-9">
      {{ @$job_data->posting_Date }}
    </div>
	</div>

	

<input type="hidden" name="action"><input type="hidden" name="TR_job_title" value="Ipsa vel fugiat aut"><input type="hidden" name="job_reference" value="Quisquam voluptates"><input type="hidden" name="country1" value="24"><input type="hidden" name="state"><input type="hidden" name="location" value="Doloribus fugiat qu"><input type="hidden" name="salary" value="Cupiditate dicta vel"><input type="hidden" name="skills" value="Ut dolore nisi sit s"><input type="hidden" name="post_url"><input type="hidden" name="url"><input type="hidden" name="job_auto_renew" value="0"><input type="hidden" name="TR_post_job_category[]" value="1"><input type="hidden" name="post_jobfair[]"><input type="hidden" name="TR_job_summary" value="Veniam illo error e"><input type="hidden" name="description" value="<p>dffgdfg</p>"><input type="hidden" name="TR_qualification" value="Assumenda et et quas"><input type="hidden" name="benefits" value="Aliquam a velit ex v"><input type="hidden" name="schedule" value="Vel sunt commodo non"><input type="hidden" name="responsibility" value="Perspiciatis assume"><input type="hidden" name="TREF_email_address" value="nywukew@mailinator.com"><input type="hidden" name="job_type1[]" value="3"><input type="hidden" name="relocate" value="Yes"><input type="hidden" name="TR_experience" value="0"><input type="hidden" name="TR_vacancy_period" value="50"><input type="hidden" name="TR_year" value="2023"><input type="hidden" name="TR_month" value="06"><input type="hidden" name="TR_date" value="16"><input type="hidden" name="TR_Year" value="2023"><input type="hidden" name="TR_Month" value="08"><input type="hidden" name="TR_Date" value="05"><input type="hidden" name="post_url"><input type="hidden" name="url"><input type="hidden" name="full_location" value="Doloribus fugiat qu,Bermuda">


	<div class="form-group row align-items-center">
	<label for="staticEmail" class="col-sm-3 col-form-label fw-bold text-dark"></label>
    <div class="col-sm-9">
            <a href=" {{url('employe-dashboard')}}" class="btn btn-primary" > Confirm
            </a>
             
    </div>
	</div>
</form>

          </div>
            </div>
        </div>
      </div>
            </section>
            <!-- /.content -->

        </div>
    </div>

@endsection

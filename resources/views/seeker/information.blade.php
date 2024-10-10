@extends('layout.seeker')
@section('title', 'Affilly')
@section('content')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
<div class="container">
  <div class="row">
    <div class="col-md-9 mx-auto">
        <h1 class="resume-heading">General Information</h1>
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
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Resume name :</label>
    <div class="col-sm-9">
      <input type="text" name="resume_name"  size="46" class="form-control required" fdprocessedid="vbxqm">
       @error('resume_name')
       <small id="emailHelpId"class="form-text text-muted text-danger">{{ $message }}*</small>
    @enderror
    </div>
    
  </div>
 

  


<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Objective :</label>
    <div class="col-sm-9">
      <textarea name="objective" wrap="soft" cols="60" rows="5" class="form-control h-100"></textarea>
          @error('objective')
       <small id="emailHelpId"class="form-text text-muted text-danger">{{ $message }}*</small>
    @enderror
    </div>
</div>

<div class="form-groups row align-items-center">
    <label for="staticEmail" class="col-sm-3 text-success fw-bold mb-2  m-text-start">Job Preference </label>
    <div class="col-sm-9"></div>
  </div>


<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Desired Job Type (Select) :<br><small>[ check all that apply ]</small></label>
    <div class="col-sm-9 d-flex row">
	 @foreach($jobtypes as $key => $item)
      <div class="col-3">
		<div class="form-group form-check">
			<input type="checkbox"  class="form-check-input" name="job_type[]" value="{{ $item->id }}" class="form-check-input" id="{{ $item->id }}">
			<label class="form-check-label" for="{{ $item->id }}">{{ $item->type }}</label>
		 </div>
      </div>
	@endforeach
          


	
    </div>
</div>

<div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Desired Salary $ Annually :</label>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-4"><select class="form-select" name="currency" fdprocessedid="5f7b1k">
			<option value="" selected="">Select</option>
			<option value="1">USD</option>		
			<option value="2">EUR</option>
			<option value="3">GBP</option>
			<option value="6">INR</option>
			<option value="4">ZAR</option>
			<option value="5">CAD</option>
		</select>
		       @error('currency')
       <small id="emailHelpId"class="form-text text-muted text-danger">{{ $message }}*</small>
    @enderror
	</div>
	<div class="col-8">
		<input type="text" name="expected_salary" class="form-control" size="10" fdprocessedid="y2vlpw">
				       @error('expected_salary')
       <small id="emailHelpId"class="form-text text-muted text-danger">{{ $message }}*</small>
    @enderror
	</div>
 
 <div class="1form-check mt-2 1d-flex">
	<span class="me-3">
		<input type="radio" name="expected_salary_per" value="1" id="expected_salary_per1" class="form-check-input me-2">
		<label class="form-check-label" for="expected_salary_per1">Year</label>
	</span>
	<span class="me-3">
		<input type="radio" name="expected_salary_per" value="2" id="expected_salary_per2" class="form-check-input me-2">
		<label class="form-check-label" for="expected_salary_per2">Month</label>
	</span>
	<span class="me-3">
		<input type="radio" name="expected_salary_per" value="3" checked="" id="expected_salary_per3" class="form-check-input me-2">
		<label class="form-check-label" for="expected_salary_per3">Hour</label>
	</span>
 </div>
 				       @error('expected_salary_per')
       <small id="emailHelpId"class="form-text text-muted text-danger">{{ $message }}*</small>
    @enderror
      </div>
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Desired Job Title :</label>
    <div class="col-sm-9">
      <input type="text" name="target_job_titles" class="form-control required" size="46" fdprocessedid="gsd4w">
     @error('target_job_titles')
       <small id="emailHelpId"class="form-text text-muted text-danger">{{ $message }}*</small>
     @enderror
    </div>
</div>
<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Desired Job Location :</label>
    <div class="col-sm-9 d-flex">
      <input type="radio" name="desired_location" value="Yes"  id="radio_relocate1" class="form-check-input me-1">
	   @error('desired_location')
       <small id="emailHelpId"class="form-text text-muted text-danger">{{ $message }}*</small>
     @enderror
	  <label class="form-check-label me-3" for="radio_relocate1">Remote (Not Editable)
</label>

    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">When are you available to start?
 :</label>
    <div class="col-sm-9">
      <input type="date" name="start_date" size="60" class="form-control datepicker " data-date-format="mm/dd/yyyy" fdprocessedid="sfp19o 
      required ">
    </div>
</div>

  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Category :</label>
			<div class="col-sm-9">
			  <select name="job_category" class="form-select" id="category_drop" onchange="category_dropdown()" >
			      <option value="">Please select a Category...</option>
                    @if($cat)
			       @foreach($cat as $c)
			       <option value="{{$c->id}}">{{$c->name}}</option>
			       @endforeach
			       @endif
			 </select>
			 @error('job_category')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror
			</div>
			
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Sub Category</label>
			<div class="col-sm-9">
			 <select name="sub_category" id="sub_category_dropdown" class="form-select mb-2">
	
			 </select>	
		  </div>
		  	@error('sub_category')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror

		  </div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Nationality</label>
    <div class="col-sm-9">
	  <select name="nationality" class="form-select" id="country-dropdown" >
			      <option value="">Please select a country...</option>
                    @foreach ($countries as $country) 
                        <option value="{{$country->id}}">
                        {{$country->name}}
                        </option>
                    @endforeach
			 </select>
    </div>
</div>


 
  <div class="form-groups row align-items-center">
    <label for="staticEmail" class="col-sm-3 text-success fw-bold mb-2  m-text-start">Social Account </label>
    <div class="col-sm-9"></div>
  </div>


<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Facebook URL :</label>
    <div class="col-sm-9">
      <input type="text" name="facebook_url" size="60" class="form-control" fdprocessedid="sfp19o">
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Instagram URL :</label>
    <div class="col-sm-9">
      <input type="text" name="instagram_url" size="60" class="form-control" fdprocessedid="ivyh88">
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">LinkedIn URL :</label>
    <div class="col-sm-9">
      <input type="text" name="linkedin_url" size="60" class="form-control" fdprocessedid="vmn6s5">
    </div>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom">Twitter URL :</label>
    <div class="col-sm-9">
      <input type="text" name="twitter_url" size="60" class="form-control" fdprocessedid="leq4nk">
    </div>
</div>

<div class="form-group align-items-center">
    <label for="icon" class="control-label mb-1">Long Description</label>
    <textarea class="form-control" id="body" placeholder="Enter the Description" name="description" rows="3"></textarea>
</div>

<div class="form-group row align-items-center">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-custom"></label>
    <div class="col-sm-9 m-text-center">
      <button class="btn btn-primary " style="color:white;" type="submit" >Next</button>    
	</div>
</div>


</form>

                </div>
            </div>
        </div>

    </div>
</div>
            </section>
    </div>
</div>

	<script>
	     function category_dropdown(){
      var id = $('#category_drop').val(); 
    //   alert(id)
      $('#sub_category_dropdown').empty();
      $.ajax({
        url:"{{url('get_sub_category')}}",
        type: "POST",
        data: {
        id: id,
        _token: '{{csrf_token()}}'
        },

        success: function(result){
        // console.log(result)
            $('#sub_category_dropdown').append(result); 
            
        }
        
        });

  }
    </script>
    <script>
         ClassicEditor
             .create(document.querySelector('#body'))
             .catch(error => {
                 console.error(error);
             });
     </script>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
     </script>
	    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>




@endsection
    <!-- /.container -->




















	


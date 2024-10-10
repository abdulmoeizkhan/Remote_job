@extends('layout.admin')
@section('title','Affilly')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
 
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12 mx-auto">
				<table border="0" width="100%" cellspacing="0" cellpadding="3">
		</table>
		
					<div class="card card-custom">
						<div class="card-body card-body-custom">
		@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
		
		<form action="{{url('admin-update-detail')}}" method="post" enctype="multipart/form-data" >
		@csrf
		<input class="form-control" value="{{$job->id}}" type="hidden" name="id">
		
		  <div class="form-group row align-items-center">
		      	@if (Session::has('success'))
                 <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
		   <div class="col-md-10">
		       <h2>Edit JobPost</h2>
		       </div>
		   <div class="col-md-2">
		   <a href="{{url('admin-view-all-jobs')}}" class="btn btn-primary"> back </a> </div>
		      
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job title :</label>
			<div class="col-sm-9">
			  <input type="text"  name="title" value="{{$job->title}}" class="form-control required" disabled />
			  @error('title')
			  <small id="emailHelpId"
			  class="form-text text-muted text-danger " style="!important">{{ $message }}</small>
			  @enderror
			</div>
			
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Company Name :</label>
			<div class="col-sm-9">
			  <input type="text" value="{{$job->company_name}}" name="company_name" class="form-control required" disabled >
			</div>
		  </div>
		  
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">No of employess :</label>
			<div class="col-sm-9">
			  <input type="number" value="{{$job->no_emp}}" name="no_emp" class="form-control " disabled>
			</div>

		  </div>
		  
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job reference :</label>
			<div class="col-sm-9">
			  <input type="text" value="{{$job->job_reference}}" name="job_reference" class="form-control" disabled>
			</div>
		  </div>
		  
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Country :</label>
			<div class="col-sm-9">
			  <select name="country" class="form-select" id="country-dropdown" disabled>
			      <option value="">Please select a country...</option>
                    @foreach ($countries as $country) 
					<option value="{{ $country->id }}" {{$job->country == $country->id  ? 'selected' : ''}} >{{ $country->name}}</option>
                    @endforeach
			 </select>
			</div>
			@error('country')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">State</label>
			<div class="col-sm-9">
			 <select name="state" id="state-dropdown" class="form-select mb-2" disabled>
				@foreach ($states as $state) 
					<option value="{{ $state->id }}" {{$job->state == $state->id  ? 'selected' : ''}}>{{ $state->name}}</option>
                    @endforeach
			 </select>	
			 </div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Location :</label>
			<div class="col-sm-9">
			  <input type="text" value="{{$job->location}}" name="location" class="form-control" disabled>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Min Salary :</label>
			<div class="col-sm-9">
			  <div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend d-inline-block mr-1">
			<!--<span class="input-group-text" id="basic-addon1">$</span>-->
		  </div> <input type="number" name="salary" value="{{$job->salary}}" class="form-control" disabled>
			  </div>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Max Salary :</label>
			<div class="col-sm-9">
			  <div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend d-inline-block mr-1">
			<!--<span class="input-group-text" id="basic-addon1">$</span>-->
		  </div> <input type="number" name="maxsalary" value="{{$job->maxsalary}}" class="form-control" disabled>
			  </div>
			</div>
		  </div>
		
		   <div class="form-groupd row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Skills:</label>
			<div class="col-sm-9">
			  <input type="text" value="{{$job->job_skill}}" name="job_skill" class="form-control" disabled>
			</div>
		  </div>
		
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right"></label>
			<div class="col-sm-9">
			  <small class="text-muted font-14"> Separated  by commas</small>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Category :</label>
			<div class="col-sm-9">
			  <select name="job_category" id="category_drop" onchange="category_dropdown()" class="form-control " disabled>
			     @foreach ($cat as $c )
				 <option value="{{ $c->id }}" {{$job->job_category == $c->id  ? 'selected' : ''}}>{{ $c->name}}</option>
    
				 @endforeach
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
			 
			 <select name="sub_category" id="sub_category_dropdown" class="form-select mb-2" disabled>
 			         <?php
                    $data    = DB::table('sub_categories')->where('id',$job->sub_category)->first();
    //   dd($data);
 			         ?>

			     @foreach ($sub_cat as $c )
				 <option value="{{ $c->id }}" {{$job->sub_category == $c->id  ? 'selected' : ''}}>{{ $c->sub_category}}</option>
    
				 @endforeach
			 </select>	
			 
		  </div>
		  	@error('sub_category')
			<small id="emailHelpId"
			class="form-text text-muted text-danger">{{ $message }}</small>
			@enderror

		  </div>
		  
		  
		  
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Summary :</label>
			<div class="col-sm-9">
			  <textarea disabled name="job_summary"  wrap="soft" cols="68" rows="4" class="form-control required h-100">{{$job->job_summary}}</textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Description :</label>
			<div class="col-sm-9">

			 	<textarea disabled class="form-control" id="body" name="job_description" cols="30" rows="10">
                                {{$job->job_description}}
                                </textarea>
			@error('job_description')
		<small id="emailHelpId"
		class="form-text text-muted text-danger important">{{ $message }}</small>
		@enderror
		</div>
		
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Responsibilities :</label>
			<div class="col-sm-9">
			  <textarea disabled name="responsibilities" wrap="soft" cols="50" rows="2" class="form-control h-50">{{$job->responsibilities}}</textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Qualifications :</label>
			<div class="col-sm-9">
			  <textarea disabled name="qualifications" wrap="soft" cols="50" rows="2" class="form-control required h-50"> {{$job->qualifications}} </textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Benefits :</label>
			<div class="col-sm-9">
			  <textarea disabled name="benefits" wrap="soft" cols="50" rows="2" class="form-control h-50">{{$job->benefits}}</textarea>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Schedule :</label>
			<div class="col-sm-9">
			  <input type="text" disabled name="schedule" value="{{$job->schedule}}" class="form-control">
			</div>
		  </div>
		
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Apply Online :</label>
			<div class="col-sm-9">
			  <div class="row align-items-center">
				<div class="col-sm-1">
				  <div class="form-check">
				<input disabled type="checkbox" name="url_apply_online" value="Yes" onclick="show_hide()" class="form-check-input" id="checkbox_url" 
				<?php
				if($job->website_url!=null){
					echo 'checked';
				}else{
					
				}
				?>
				>
									  <label class="form-check-label" for="checkbox_url"></label>
									</div>
				</div>
				<div class="col-sm-11" id="myrow" style="visibility:hidden">
					
				  {{-- <input type="text" name="url" class="form-control" placeholder="Enter "> --}}
				</div>
			  </div>
			</div>
		  </div>
		
	
	
		
		
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job type :</label>
			<div class="col-sm-9">
			  <select disabled name="job_type" class="form-select" >
			       <option value="">Please select job Type...</option>
			      
				   @foreach ($type as $t )

				   <option value="{{$t->id}}" {{$job->job_type == $t->id  ? 'selected' : ''}}>{{ $t->type}}</option>
	  
				   @endforeach
				   {{-- @if($type)
			       @foreach($type as $t)
			       <option value="{{$t->id}}">{{$t->type}}</option>
			       @endforeach
			       @endif --}}
			      </select>
			      
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Are employees required to reside in a specific location?* :</label>
			<div class="col-sm-9">
				<div class="d-flex">
					<div class="custom-control custom-radio">
						<input disabled type="radio" name="specific-locaiton" value="1" id="reside_no" onclick="change_reside_status('no')" class="form-check-input" checked>&nbsp;
						<label class="custom-control-label small" for="reside_no" >No</label>
					</div>
					<div class="custom-control custom-radio">
						<input disabled type="radio" name="specific-locaiton" value="1" id="reside_yes" onclick="change_reside_status('yes')" class="form-check-input">&nbsp;
						<label class="custom-control-label small" for="reside_yes" >Yes</label>
					</div>
				</div>
				<input disabled type="text" class="form-control" value="" id="reside-location" name="reside-location" hidden>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Experience  :</label>
			<div class="col-sm-9">
			  <select disabled name="experience" class="form-select">
			      
			       <option value="">Please select job country...</option>
				   @foreach($exp as $e)
				   {{-- <option value="{{$t->id}}" {{$job->job_type == $t->id  ? 'selected' : ''}}>{{ $t->type}}</option> --}}
	  
			       <option value="{{$e->id}}" {{$job->experience == $e->id  ? 'selected' : ''}}>{{$e->min_exp}} years - {{$e->max_exp}} years</option>
			       @endforeach  
				   {{-- @if($exp)
			       @foreach($exp as $e)
			       <option value="{{$e->id}}">{{$e->min_exp}} years - {{$e->max_exp}} years</option>
			       @endforeach
			       @endif --}}
			      </select>
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Expiry Date :</label>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-md-4 pr-0">
						<input  type="date" name="expiry_Date" class="form-control " value="{{$job->expiry_Date}}">
						</div>
			  </div>
			</div>
		  </div>
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Posting Date :</label>
			<div class="col-sm-9">
			<div class="">
				<div class="row">
					<div class="col-md-4 pr-0">
						<input  type="date" name="posting_Date"  class="form-control " value="{{$job->posting_Date}}">
						</div>
			  </div>
			  <!--row end-->
			</div>
			<!--col-sm-9 end-->
		  </div>
		</div>
		
		   <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Job Auto Renew :</label>
			<div class="col-sm-9">
			  <select name="job_auto_renew" class="form-select" disabled>
				<option value="0" selected=""> None  </option>
				<option value="{{$job->job_auto_renew}}" {{$job->experience   ? 'selected' : ''}}>{{"$job->job_auto_renew"}}-Days</option>
				<option value="3"> 3 Days  </option>
				<option value="7"> 7 Days  </option>
				<option value="14"> 14 Days  </option>
				<option value="21"> 21 Days  </option>
				<option value="28"> 28 Days  </option>
			</select>
			</div>
		  </div>
		  
		
		  <div class="form-group row align-items-center">
		   <label for="inputPassword" class="col-sm-3 col-form-label text-right">&nbsp;</label>
			<div class="col-sm-9">
				<input disabled type="checkbox"  value="Yes" onclick="showbox()" class="form-check-input" >
				
			 <input class="btn btn-primary" type="submit" >
			</div>
		  </div>

		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">&nbsp;</label>
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

  <script> 
function show_hide(){
	
	

	checkBox = document.getElementById('checkbox_url');
// Check if the element is selected/checked
	if(checkBox.checked) {
		
		var input = document.getElementById("myrow1").style.display = "none"; 
	var input2 = document.getElementById("myrowurl").style.display = "block"; 

	}else{
		var input = document.getElementById("myrow1").style.display = "block"; 
	var input2 = document.getElementById("myrowurl").style.display = "none"; 
	}

}

function change_reside_status(status){

	if(status == "no") {
		$("#reside-location").prop("hidden",true);
	} else if(status == "yes") {
		$("#reside-location").prop("hidden",false);
	}

}


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
        console.log(result)
            $('#sub_category_dropdown').append(result); 
            
        }
        
        });
 
      
  }
</script>
<script>
    ClassicEditor.create(document.querySelector('#body')).catch(error => {
        console.error(error);
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
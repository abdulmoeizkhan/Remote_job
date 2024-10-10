@extends('layout.employer')
@section('title','Affilly')
@section('content')
 <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-7 mx-auto">
				<table border="0" width="100%" cellspacing="0" cellpadding="3">
		</table>
		
					<div class="card card-custom">
						<div class="card-body card-body-custom">
		@if(Auth::user()->email_verified==0)
		
		Kindly first verify the email
		<a href="{{url('resend-email')}}" class="btn btn-primary" >Send Email</a>
		@else
		<form name="defineForm" action="{{url('employe_save_user')}}" method="post" enctype="multipart/form-data" >
		@csrf
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">First Name :</label>
			<div class="col-sm-9">
			  <input type="text" name="first_name" class="form-control required">
			</div>

		  </div>

		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Last Name :</label>
			<div class="col-sm-9">
			  <input type="text" name="last_name" class="form-control">
			</div>
		  </div>
		  
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Email Address :</label>
			<div class="col-sm-9">
			  <input type="email" name="email" class="form-control">
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Phone :</label>
			<div class="col-sm-9">
			  <input type="email" name="phone" class="form-control">
			</div>
		  </div>
		  		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Password :</label>
			<div class="col-sm-9">
			  <input type="text" name="password" class="form-control">
			</div>
		  </div>
		  		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Confirm Password :</label>
			<div class="col-sm-9">
			  <input type="text" name="con_pass" class="form-control">
			</div>
		  </div>
		


		  <div class="form-group row align-items-center">
		   <label for="inputPassword" class="col-sm-3 col-form-label text-right">&nbsp;</label>
			<div class="col-sm-9">
			  <input type="submit" name="Preview" value="Save" class="btn btn-primary">
			</div>
		  </div>
		</form>
				@endif
		</div>
		
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
 

@endsection
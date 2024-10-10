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
			
					<div class="card card-custom">
					    <h3 class="ml-2">Edit User</h3>
						<div class="card-body card-body-custom">
		@if(Auth::user()->email_verified==0)
		
		Kindly first verify the email
		<a href="{{url('resend-email')}}" class="btn btn-primary" >Send Email</a>
		@else
		<form name="defineForm" action="{{url('employe_update_user')}}" method="post" enctype="multipart/form-data" >
		@csrf
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">First Name :</label>
			<div class="col-sm-9">
			  <input type="text" name="name" value="{{$user->name}}" class="form-control required" required>
			</div>

		  </div>

		 <!-- <div class="form-group row align-items-center">-->
			<!--<label for="inputPassword" class="col-sm-3 col-form-label text-right">Last Name :</label>-->
			<!--<div class="col-sm-9">-->
			<!--  <input type="text" name="last_name" class="form-control">-->
			<!--</div>-->
		 <!-- </div>-->
		  <input type="hidden" name="user_id" value="{{$user->id}}">
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Email Address :</label>
			<div class="col-sm-9">
			  <input type="email" name="email" class="form-control" value="{{$user->email}}" required>
    		   @error('email')
			  <small id="emailHelpId"
			  class="form-text text-muted text-danger " style="!important">{{ $message }}</small>
			  @enderror
			</div>
		  </div>
		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Phone :</label>
			<div class="col-sm-9">
			  <input type="number" name="phone" class="form-control" value="{{$user->phone}}" required>
    		   @error('phone')
			  <small id="emailHelpId"
			  class="form-text text-muted text-danger " style="!important">{{ $message }}</small>
			  @enderror
			</div>
		  </div>
		  		  <div class="form-group row align-items-center">
			<label for="inputPassword" class="col-sm-3 col-form-label text-right">Password :</label>
			<div class="col-sm-9">
			  <input type="text" name="password" class="form-control" required>
			</div>
		  </div>
		 <!-- 		  <div class="form-group row align-items-center">-->
			<!--<label for="inputPassword" class="col-sm-3 col-form-label text-right">Confirm Password :</label>-->
			<!--<div class="col-sm-9">-->
			<!--  <input type="text" name="con_pass" class="form-control">-->
			<!--</div>-->
		 <!-- </div>-->
		


		  <div class="form-group row align-items-center">
		   <label for="inputPassword" class="col-sm-3 col-form-label text-right">&nbsp;</label>
			<div class="col-sm-9">
			  <input type="submit" name="Preview" value="Update" class="btn btn-primary">
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


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from joblly-admin-template-dashboard.multipurposethemes.com/bs5/main/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 20:33:55 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('fav.ico')}}">

    <title>RemotePhase - Registration </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('seeker/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('seeker/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('seeker/css/skin_color.css')}}">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('seeker/images/auth-bg/bg-16.jpg')}})">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary fw-600">Let's Get Started</h2>
								<p class="mb-0 text-fade">Sign in to continue to remotePhase.</p>							
							</div>
							<div class="p-40">
							@if (Session::has('success'))
<div class="alert alert-danger">{{ Session::get('success') }}</div>
@endif

								<form action="{{route('custom_login')}}" method="post">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="text-fade ti-user"></i></span>
											<input type="email" name="email"  value="{{old('email')}}" class="form-control ps-15 bg-transparent" placeholder="email">
										
                                        
											
                                           
										</div>
										 @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="text-fade ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="text-primary fw-500 hover-primary"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-primary w-p100 mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0 text-fade">Don't have an account? <a href="{{url('user-registration ')}}" class="text-primary ms-5">Sign Up</a></p>
								</div>
								
								
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('seeker/js/vendors.min.js')}}"></script>
	<script src="{{asset('seeker/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('seeker/assets/icons/feather-icons/feather.min.js')}}"></script>	

</body>

<!-- Mirrored from employx-admin-templates.multipurposethemes.com/html/template/vertical/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 14:30:44 GMT -->
</html>

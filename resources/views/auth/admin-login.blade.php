
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('seeker/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('seeker/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('seeker/css/skin_color.css')}}">	

</head>
	
<body class="hold-transition theme-primary bg-img bg-primary" >
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to WebkitX.</p>							
							</div>
							<div class="p-40">
								<form action="{{url('admin-authentication')}}" method="post">
								    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="email" name="email" class="form-control pl-15 bg-transparent" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" name="password" class="form-control pl-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-right">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-primary mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('seekerjs/vendors.min.js')}}"></script>
	<script src="{{asset('seekerjs/pages/chat-popup.js')}}"></script>
    <script src="{{asset('seekerassets/icons/feather-icons/feather.min.js')}}"></script>	

</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://joblly-admin-template-dashboard.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Registration message  </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('seeker/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('seeker/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('seeker/css/skin_color.css')}}">	

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card card-custom">
                            @if($status==1)
                        <div class="card-header card-header-custom">
                            
                            
                            
                            <h1 class="main-heading">Your Account Has Been Verified!</h1>
                        </div>
                        <div class="card-body card-body-custom">
                       Congratulations! Your new account 
                       has been successfully Verified!
                        </div>
                            @else
                                @if(Session::has('message'))
                            <h1 class="main-heading">{{ Session::get('message') }}</h1>
                            @endif
                                
                            </h1>


                                                    @endif


                        <!--<div class="card-footer card-footer-custom">-->
                        <!--    <a href="" class="btn btn-primary">Next</a>-->
                        <!--</div>-->



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
</html>

	


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://joblly-admin-template-dashboard.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Registration message</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('seeker/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('seeker/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('seeker/css/skin_color.css')}}">	

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">

		<div class="row align-items-center justify-content-md-center h-p100">
	    <p class="alert alert-success">Please Check Your Email For Verification!</p>
			
			<div class="col-12">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card card-custom">
                        <div class="card-header card-header-custom">
                            <h1 class="main-heading">Your Account Has Been Created!</h1>
                        </div>
                        <div class="card-body card-body-custom">
                       Congratulations! Your new account has been successfully created! You can now take advantage of member privileges to enhance your online jobsite application experience with us. If you have <small><b>ANY</b></small> questions about the operation of this online jobsite, please contact the <a href="https://remotephase.com/contact_us.php">admin of the site</a><br><br>A confirmation has been sent to the provided email address. If you have not received it within the hour, please contact the <a href="https://remotephase.com/contact_us.php">admin of the site</a>.<br><br><b>REMOTEPHASE</b>
                        </div>

                        <div class="card-footer card-footer-custom">
                            @if(Auth::user()->email_verified==1)
                            <a href="{{url('seeker-general-information')}}" class="btn btn-primary">Next</a>
                            
                            @else
                            <a href="#" class="btn btn-primary" onclick="message()">Next</a>
                            
                            @endif
                            
                            
                            
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
	
	<script>
	    function message(){
	        alert('Please Verify Your Email!');
	    }
	</script>
</body>
</html>

	

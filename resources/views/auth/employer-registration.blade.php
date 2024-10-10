<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('fav.ico')}}">

    <title>Employer-Registration </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('seeker/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('seeker/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('seeker/css/skin_color.css') }}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-2.jpg)">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-8 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Employer Registration</h2>
                                <div class="text-center">Or</div>
                                <h4 class="mb-0"> <a href="{{ url('user-registration') }}">Register as Job Seeker</a>
                                </h4>
                            </div>
                            <div class="p-40">
                                <form name="registration" action="{{url('save-employer')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <p class="label-text">Account Details</p>
                                    <div class="form-group">

										<input type="text" name="company_name" value="{{old('company_name')}}"  class="form-control mb-2 required"
                                        placeholder="Compnay Name" fdprocessedid="qgzr27">
										
										@error('company_name')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror
									</div>

									<div class="form-group">
										<input type="text" name="email" value="{{old('email')}}" class="form-control mb-2 required"
                                        placeholder="Email Address" fdprocessedid="qgzr27">

										@error('email')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror
									</div>

									
									
										<div class="form-group">
                                        <input type="password" name="password" value="{{old('password')}}" class="form-control required"
                                            placeholder="Password" fdprocessedid="pj6p8l">
                                    
											@error('password')
											<small id="emailHelpId"
											class="form-text text-muted  text-danger" >{{ $message }}</small>
											  
											@enderror
										</div>


                                    <p class="label-text m-m-t-10">Personal Details</p>
                                    <div class="row">


                                        <div class="col-md-6"><input type="text" name="firstname" value="{{old('firstname')}}"
                                                placeholder="First name" class="form-control mb-2 required"
                                                fdprocessedid="66xkbv">
											
												@error('firstname')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6"><input type="text" name="lastname" value="{{old('lastname')}}"
                                                placeholder="Last name" class="form-control mb-2 required"
                                                fdprocessedid="u0th7l">
												@error('lastname')
												<small id="emailHelpId"
												class="form-text text-muted  text-danger"  >{{ $message }}</small>
												  
												@enderror
											
											
											</div>
                                    </div>

                                    <textarea name="address" wrap="soft" cols="45" rows="3" id="address" placeholder="Address Line 1"
                                        class="form-control mb-2 required">{{old('address')}}</textarea>
										@error('address')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror
										
										<textarea name="address2" wrap="soft" cols="45" rows="3" id="address" placeholder="Address Line 2"
                                        class="form-control mb-2 required">{{old('address')}}</textarea>
										@error('address')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror

                                    <div class="row">
                                        <div class="col-md-6">
											<input type="text" name="city" value="{{old('city')}}"
                                                placeholder="City/town" class="form-control mb-2 required"
                                                fdprocessedid="dwgy0c">
												@error('city')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6"><input type="text" name="zip" value="{{old('address')}}" placeholder="Zip"
                                                class="form-control mb-2" fdprocessedid="414za">
											
												@error('zip')
												<small id="emailHelpId"
												class="form-text text-muted text-danger" >{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6"><select id="country-dropdown" name="country"  value="{{old('country')}}" class="form-select mb-2">
                                                <option value="">Please select a country...</option>
                                                @foreach ($countries as $country) 
                                                <option value="{{$country->id}}">
                                                {{$country->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            	@error('country')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
												</div>
                                        <div class="col-md-6">
                                             <select name="state" id="state-dropdown" class="form-select mb-2"></select> </div>
                                        <div class="col-md-6">
											<input type="text" name="phone"
                                                placeholder="Contact No" class="form-control mb-2"
                                                fdprocessedid="jzp656">
												@error('state')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6"><input type="number" name="mobile"  value="{{old('mobile')}}"
                                                placeholder="Mobile" class="form-control mb-2"
                                                fdprocessedid="g83kza">
												@error('mobile')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
											
											<div class="col-md-6">
											<input type="text" name="company_website" placeholder="company website url" class="form-control mb-2" fdprocessedid="jzp656">
											</div>
																							
											<div class="col-md-6">
											<input type="number" name="no_emp" placeholder="No Employees" class="form-control mb-2" fdprocessedid="jzp656">
											</div>
											<div class="col-md-12">
												<textarea name="company_desc" wrap="soft" cols="45" rows="3" id="address" placeholder="Company Description"
                                        class="form-control mb-2 required">{{old('address')}}</textarea>
										@error('address')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror
											 </div>

												
                                    </div>
                                    <div class="pt-2">
                                        <div class="form-group">
                                            <p class="label-text" id="emailHelp" required>Company logo:</p>
                                            <input type="file" name="my_resume"><span
                                                class="m-display-table small">Upload txt / doc / docx / pdf
                                                format</span>
                                                  <br>
												@error('my_resume')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror

                                        </div>
                                    </div>
                                 

                                  

                                    <!--<p class="label-text mt-3">newsletter?</p>-->
                                    <div class="my-3 d-flex">
                                        <div class="form-check">
                                            <input type="checkbox" name="newsletter" value="Yes" checked=""
                                                class="form-check-input" id="checkbox_news">
                                            <label class="custom-control-label small"
                                                for="checkbox_news">Newsletter</label>
                                                <br>
                                            <input class="btn btn-primary" type="submit">
                                        </div>
                                    </div>
                                    <div>
                                        
                                    </div>
                                   
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Already have an account?<a href="{{ url('login') }}"
                                            class="text-danger ms-5"> Sign In</a></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('seeker/js/vendors.min.js') }}"></script>
    <script src="{{ asset('seeker/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('seeker/assets/icons/feather-icons/feather.min.js') }}"></script>
    <script>
        $(document).ready(function() {
        $('#country-dropdown').on('change', function() {
        var country_id = this.value;
        $("#state-dropdown").html('');
        $.ajax({
        url:"{{url('get-states-by-country')}}",
        type: "POST",
        data: {
        country_id: country_id,
        _token: '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(result){
        $.each(result.states,function(key,value){
        $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
        });
        $('#city-dropdown').html('<option value="">Select State First</option>'); 
        }
        });
        });    
        // $('#state-dropdown').on('change', function() {
        // var state_id = this.value;
        // $("#city-dropdown").html('');
        // $.ajax({
        // url:"{{url('get-cities-by-state')}}",
        // type: "POST",
        // data: {
        // state_id: state_id,
        // _token: '{{csrf_token()}}'
        // },
        // dataType : 'json',
        // success: function(result){
        // $.each(result.cities,function(key,value){
        // $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
        // });
        // }
        // });
        // });
        });
</script>


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('fav.ico')}}">

    <title>Seeker-Registration </title>

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
								<h2 class="text-primary">User Registration</h2>
								<div class="text-center">Or</div>
								<h4 class="mb-0"> <a href="{{url('employe-registation')}}">Register as Employer</a></h4>							
							</div>
                            <div class="p-40">
                            <form action="{{url('save-jobSeeker')}}" enctype="multipart/form-data" method="POST">
                                @csrf

                                    <p class="label-text">Account Details</p>
                                    <div class="form-group">
                                        <input type="text" name="email" value="{{old('email')}}" class="form-control  required"
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
                                            class="form-text text-muted text-danger">{{ $message }}</small>
                                              
                                            @enderror
                                    </div>
                                    <p class="label-text m-m-t-10">Personal Details</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="firstname" value="{{old('firstname')}}"
                                                placeholder="First name" class="form-control mb-2 required"
                                                fdprocessedid="66xkbv">
                                                @error('firstname')
                                            <small id="emailHelpId"
                                            class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                            </div>
                                        <div class="col-md-6">
                                            <input type="text" name="lastname" value="{{old('lastname')}}"
                                                placeholder="Last name" class="form-control mb-2 required"
                                                fdprocessedid="u0th7l">
                                                @error('lastname')
                                                <small id="emailHelpId"
                                                class="form-text text-muted text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                    </div>

                                    <textarea name="address"  wrap="soft" cols="45" rows="3" id="TR_full_address"
                                        placeholder="Full address" class="form-control mb-2 required">{{old('address')}}</textarea>
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
                                        <div class="col-md-6">
                                            <input type="text" name="zip" value="{{old('zip')}}" placeholder="Zip"
                                                class="form-control mb-2" fdprocessedid="414za">
                                                @error('Zip')
                                                <small id="emailHelpId"
                                                class="form-text text-muted text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        <div class="col-md-6">
                                            <select id="country-dropdown" name="country" value="{{old('country')}}" class="form-select mb-2">
                                                
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
                                            <select name="state" id="state-dropdown" class="form-select mb-2">
                                                
                                                
                                            </select> 
                                            @error('state')
                                            <small id="emailHelpId"
                                            class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6"><input type="number" name="mobile" value="{{old('mobile')}}"
                                                placeholder="Mobile" class="form-control mb-2"
                                                fdprocessedid="g83kza">
                                                @error('mobile')
                                            <small id="emailHelpId"
                                            class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                     <div class="pt-2">
                                        <div class="form-group">
                                            <p class="label-text" id="emailHelp">Upload profile image:</p>
                                            <input type="file" name="image" value="{{old('image')}}" accept="image/png, image/jpeg">
                                            @error('image')
                                            <br>
                                            <small id="emailHelpId"
                                            class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                            <span
                                                class="m-display-table small">Upload image png / jpeg format</span>

                                        </div>
                                    </div>
                                    
                                    
                                    <div class="pt-2">
                                        <div class="form-group">
                                            <p class="label-text" id="emailHelp">Upload resume:</p>
                                            <input type="file" name="resume" accept="application/pdf">
                                           
                                            @error('resume')
                                            <br>
                                            <small id="emailHelpId"
                                            class="form-text text-muted text-danger">{{ $message }}</small>
                                            @enderror
                                            <span
                                                class="m-display-table small"  >Upload only pdf
                                                format</span>

                                        </div>
                                    </div>
                                    <p class="label-text">Privacy setting</p>
                                    <div class="custom-control custom-radio"><input type="radio" name="privacy"
                                            value="1" id="radio_privacy1" class="form-check-input">&nbsp;<label
                                            class="custom-control-label small" for="radio_privacy1">Hide my contact
                                            information from all employers.</label></div>
                                    <div class="custom-control custom-radio"><input type="radio" name="privacy"
                                            value="2" id="radio_privacy2" class="form-check-input">&nbsp;<label
                                            class="custom-control-label  small" for="radio_privacy2">Show my contact
                                            information to the employers to whom I have applied.</label></div>
                                    <div class="custom-control custom-radio"><input type="radio" name="privacy"
                                            value="3" checked="" id="radio_privacy3"
                                            class="form-check-input">&nbsp;<label class="custom-control-label  small"
                                            for="radio_privacy3">Show my contact information to all employers.</label>
                                    </div>

                                    <p class="label-text mt-3">resume searchable?</p>
                                    <span class="d-flex">
                                        <div class="form-check me-3"><input type="radio" name="cv_searchable"
                                                value="Yes" checked="" id="radio_cv_searchable1"
                                                class="form-check-input">&nbsp;<label
                                                class="custom-control-label small" for="radio_cv_searchable1"
                                                onmouseover="this.style.color='#0000aa'"
                                                onmouseout="this.style.color='#000000'">Yes</label></div>
                                        <div class="custom-control custom-radio"><input type="radio"
                                                name="cv_searchable" value="No" id="radio_cv_searchable2"
                                                class="form-check-input">&nbsp;<label
                                                class="custom-control-label small" for="radio_cv_searchable2"
                                                onmouseover="this.style.color='#0000aa'"
                                                onmouseout="this.style.color='#000000'">No</label></div>
                                    </span>

                                    <!--<p class="label-text mt-3">newsletter?</p>-->
                                    <div class="my-3 d-flex">
                                        <div class="form-check">
                                            <input type="checkbox" name="newsletter" value="Yes" checked=""
                                                class="form-check-input" id="checkbox_news">
                                            <label class="custom-control-label small"
                                                for="checkbox_news">Newsletter</label>
                                        </div>
                                    </div>
                                         <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-4 control-label">Captcha</label>


                      <div class="col-md-6">
                          <div class="captcha">
                          <span>{!! captcha_img() !!}</span>
                          <button type="button" class="btn btn-success btn-refresh" >A</button>
                          </div>
                          <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">


                          @if ($errors->has('captcha'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
									<input class="btn btn-primary" type="submit">
								</form>

                                    <div></div>
                                    <small id="emailHelp" class="text-muted font-14">By continuing, you acknowledge
                                        that you accept our <a href="terms.php">Terms &amp; Conditions</a> and <a
                                            href="privacy.php">Privacy Policy</a> </small>
                             
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


    <!-- Vendor JS -->
    <script src="{{ asset('seeker/js/vendors.min.js') }}"></script>
    <script src="{{ asset('seeker/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('seeker/assets/icons/feather-icons/feather.min.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $('#country-dropdown').on('change', function() {
        var country_id = this.value;
        // alert(country_id)
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

$(".btn-refresh").click(function(){
  $.ajax({
     type:'GET',
     url:'/refresh_captcha',
     success:function(data){
        $(".captcha span").html(data.captcha);
     }
  });
});


</script>


</body>

</html>

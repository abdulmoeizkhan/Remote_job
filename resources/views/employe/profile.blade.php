@extends('layout.employer')
@section('title', 'Affilly')
@section('content')

    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-8 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Edit Profile</h2>
                                
                           
                                </p>
                            </div>
                            <div class="p-40">
                                <form name="registration" action="{{url('employe-update-profile')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    
                                    <input type="hidden" value="{{$emp->id}}" >
                                    <p class="label-text">Account Details</p>
                                    <div class="form-group">

										<input type="text" name="company_name" value="{{$emp->company_name}}" class="form-control mb-2 required"
                                        placeholder="Compnay Name" fdprocessedid="qgzr27">
										
										@error('company_name')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror
									</div>

									<div class="form-group">
										<input type=""  disabled value="{{$emp->email}}" class="form-control mb-2 required"
                                        >

										@error('email')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror
									</div>

									
									
										<div class="form-group">
                                        <input type="text" disabled value="{{$emp->password}}" class="form-control required"
                                            placeholder="Password" fdprocessedid="pj6p8l">
                                    
											@error('password')
											<small id="emailHelpId"
											class="form-text text-muted  text-danger" >{{ $message }}</small>
											  
											@enderror
										</div>


                                    <p class="label-text m-m-t-10">Personal Details</p>
                                    <div class="row">


                                        <div class="col-md-6"><input type="text" name="firstname"
                                        value="{{$emp->firstname}}"
                                                placeholder="First name" class="form-control mb-2 required"
                                                fdprocessedid="66xkbv">
											
												@error('firstname')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6"><input type="text" name="lastname"
                                                placeholder="Last name"  value="{{$emp->lastname}}" class="form-control mb-2 required"
                                                fdprocessedid="u0th7l">
												@error('lastname')
												<small id="emailHelpId"
												class="form-text text-muted  text-danger"  >{{ $message }}</small>
												  
												@enderror
											
											
											</div>
                                    </div>

                                    <textarea name="address" wrap="soft" cols="45" rows="3" id="address" placeholder="Full address"
                                        class="form-control mb-2 required"> {{$emp->address}}</textarea>
										@error('address')
										<small id="emailHelpId"
										class="form-text text-muted text-danger">{{ $message }}</small>
										  
										@enderror

                                    <div class="row">
                                        <div class="col-md-6">
											<input type="text" name="city"
                                                placeholder="City/town"  value="{{$emp->city}}" class="form-control mb-2 required"
                                                fdprocessedid="dwgy0c">
												@error('city')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6"><input type="text" name="zip" value="{{$emp->zip}}" placeholder="Zip"
                                                class="form-control mb-2" fdprocessedid="414za">
											
												@error('zip')
												<small id="emailHelpId"
												class="form-text text-muted text-danger" >{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6">
                                            <select id="country-dropdown" name="country" class="form-select mb-2">
                                               
                                                @foreach ($countries as $country) 
                                                <option <?php if($emp->country==$country->id){echo "selected";}?> value="{{$country->id}}">
                                                {{$country->name}}
                                                </option>
                                                @endforeach
                                            </select></div>
                                        <div class="col-md-6">
                                             <select name="state" id="state-dropdown" class="form-select mb-2">
                                                 @foreach($states as $state)
                                                 <option <?php if($emp->state==$state->id){echo "selected";}?> value="{{$state->id}}">
                                                {{$state->name}}
                                                     
                                                </option>
                                                     @endforeach
                                             </select> </div>
                                        <div class="col-md-6">
											<input type="text" name="phone"
                                                placeholder="Contact No" value="{{$emp->phone}}" class="form-control mb-2"
                                                fdprocessedid="jzp656">
												@error('phone')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
                                        <div class="col-md-6"><input type="text" value="{{$emp->mobile}}" name="mobile"
                                                placeholder="Mobile" class="form-control mb-2"
                                                fdprocessedid="g83kza">
												@error('mobile')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror
											</div>
											
											<div class="col-md-12">
											 <textarea name="company_desc" wrap="soft" cols="45" rows="3" id="address" placeholder="Full address"
                                        class="form-control mb-2 required"> {{@$emp->company_desc}}</textarea>
                                        </div>
                                     <img src="{{ asset('uploads/employe/logo') }}/{{ $emp->logo}}" style= "width:100px; "
												
                                    </div>
                                    <div class="pt-2">
                                        <div class="form-group">
                                            <p class="label-text" id="emailHelp" required>Company logo:</p>
                                            <input type="file"  name="my_resume" ><span
                                                class="m-display-table small">Upload png / jpeg / jpg
                                                format</span>

												@error('my_resume')
												<small id="emailHelpId"
												class="form-text text-muted text-danger">{{ $message }}</small>
												  
												@enderror

                                        </div>
                                    </div>
                                
                                    
                                  
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
                                     <div class="my-3 d-flex">
                                        <div class="form-check">
                                            
                                            <label class="custom-control-label"
                                                for="checkbox_news">Account Renewal Date</label>
                                                <br>
                                                <input type=""  value="{{$subscription->created_at->format('d-M-Y')}}" 
                                                class="form-control mb-2"  disabled>
                                        
										    <label class="custom-control-label"
                                                for="checkbox_news">Pricing Plan</label>
                                                <br>
                                                <input type=""  value="{{$subscription->name}}" 
                                                class="form-control mb-2"  disabled>
                                        
                                        
                                     
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
                                            <input class="btn btn-primary mt-4" type="submit">
                                        </div>
                                    </div>
                                    
                                    <div>
                                       
                                    </div>
                                </form>
                                
                            </div>
                        </div>

                        <!-- <div class="text-center">
      <p class="mt-20 text-white">- Register With -</p>
      <p class="gap-items-2 mb-20">
       <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
       <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
       <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
       </p>
      </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
    <!--<script src="{{ asset('seeker/js/vendors.min.js') }}"></script>-->
    <!--<script src="{{ asset('seeker/js/pages/chat-popup.js') }}"></script>-->
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

@endsection

@extends('layout.admin')
@section('title','Affilly')
@section('content')

<style>

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

</style>
<div class="content-wrapper" style="min-height: 1091px;">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
			
				<div class="col-12">
				  <div class="">
					<div class="">
						
				
				<div class="container rounded bg-white  mb-5">
    <div class="row">
        <div class="col-md-10 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{asset('uploads/seeker/image/')}}/{{$detail->image}}"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">{{$detail->email}}</span><span> </span></div>
        </div>
        <div class="col-md-10 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    
                    <h4 class="text-right">Profile Settings</h4>
                 <a class="btn btn-primary" href="{{url('/admin-view-seeker-resume')}}/{{$detail->id}}">View Resume</a>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" value="{{$detail->firstname}}" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" value="{{$detail->lastname}}" class="form-control" value="" placeholder="surname"></div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" value="{{$detail->email}}" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" value="{{$detail->address}}" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">City</label><input type="text" value="{{$detail->city}}" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" value="{{$detail->states_name}}" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">country</label><input type="text" value="{{$detail->country_name}}" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Zip code</label><input type="text" value="{{$detail->zip}}" class="form-control" placeholder="enter address line 2" value=""></div>
                
                    <p class="label-text">Privacy setting</p>
                    
                    <div class="custom-control custom-radio"><input type="radio" name="privacy" value="1" id="radio_privacy1" class="form-check-input" 
                                  @if($detail->privacy==1)
                                  checked  
                                  @endif
                                   >
                    &nbsp;<label class="custom-control-label small" for="radio_privacy1">Hide my contact
                    information from all employers.</label></div>
                    <div class="custom-control custom-radio"><input type="radio" name="privacy" value="2" id="radio_privacy2" class="form-check-input"
                    @if($detail->privacy==2)
                                  checked  
                                  @endif> 
                    &nbsp;<label class="custom-control-label  small" for="radio_privacy2">Show my contact
                    information to the employers to whom I have applied.</label></div>
                    <div class="custom-control custom-radio"><input type="radio" name="privacy" value="3"  id="radio_privacy3" class="form-check-input"
                    @if ($detail->privacy==3)
                                  checked 
                                  @endif> 
                    &nbsp;<label class="custom-control-label  small" for="radio_privacy3">Show my contact information to all employers.</label>
                    </div>
                    <p class="label-text mt-3">resume searchable?</p>
                                    <span class="d-flex">
                                        <div class="form-check me-3"><input type="radio" name="cv_searchable" value="Yes"  id="radio_cv_searchable1" class="form-check-input"
                                        @if($detail->resume_research == 'Yes')
                                  checked  
                                  @endif>
                                        &nbsp;<label class="custom-control-label small" for="radio_cv_searchable1" onmouseover="this.style.color='#0000aa'" onmouseout="this.style.color='#000000'">Yes</label></div>
                                        <div class="custom-control custom-radio"><input type="radio" name="cv_searchable" value="No" id="radio_cv_searchable2" class="form-check-input"
                                         @if($detail->resume_research== 'No')
                                  checked
                                  
                                  @endif>
                                        &nbsp;<label class="custom-control-label small" for="radio_cv_searchable2" onmouseover="this.style.color='#0000aa'" onmouseout="this.style.color='#000000'">No</label></div>
                                    </span>
                                  </div>
                
                 <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Added Date</label><p>{{ date("d/m/Y",strtotime($detail->created_at)) }}</p></div>
                    <div class="col-md-6"><label class="labels">Last Login</label> <p>{{ date("d/m/Y",strtotime($detail->last_login)) }}</p></p></div>
                
                </div>
                 
                
                                      
                                  
                
                                 
                                 
                                  
                                  <!--<p class="label-text mt-3">time</p>-->
                                  <!--<p>{{ date("H:i:s",strtotime($detail->last_login)) }}</p>-->
              
                <!--<div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>-->
            </div>
        </div>
        
    </div>
</div>

</div>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  @endsection
@extends('layout.employer')
@section('title', 'Affilly')
@section('content')

    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-8 col-md-5 col-12">
                        @if(Session::has('danger'))
                        <p class="alert alert-danger">{{ Session::get('danger') }}</p>
                        @endif
                                                @if(Session::has('success'))
                        <p class="alert alert-success">{{ Session::get('success') }}</p>
                        @endif
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Edit Setting</h2>
                                
                           
                                </p>
                            </div>
                            <div class="p-40">
                                <form name="registration" action="{{url('employe_setting_update')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    

                                    <p class="label-text">Change Password</p>
                                    <div class="form-group">

										<input type="text" name="old_password" value="" class="form-control mb-2 required"
                                        placeholder="Old Password">
										
									</div>

                                    <div class="form-group">

										<input type="text" name="new_password" value="" class="form-control mb-2 required"
                                        placeholder="New Password">
										
									</div>
									                                    <div class="form-group">

										<input type="text" name="con_password" value="" class="form-control mb-2 required"
                                        placeholder="Confirm Password">
										
									</div>
									<input type="submit" class="btn btn-primary" value="Save">



                        </div>

                
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
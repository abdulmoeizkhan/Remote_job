@extends('front_layout')
@section('header')
  <main id="main" style="background-color:#ffffff;">



    <section id="" class="features">


      <div class="container  ml-4" style=" margin-top: 100px;">

        @if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif


      </div>
       
     
     


          <div class="container  col-sm-12" style="margin-top: 60px; ">
            <div class="row">
                
                

  


              <div class="col-md-6"  style="">
               
                  <div class="col-md" id="data">
                    <input type="hidden" name="" id="did">
                    <div class="card  p-3 mb-5 bg-white rounded  ">
                      <h5  style="margin:0px" class="card-title bold text-primary">Benefits</h5>
                      <p  style="margin:0px" class="card-text"></p>
                      <p class=""  style="margin:0px">{{@$empdata->benefits}}</p>

                      <ul class=" ml-3"  style="margin:0px">
                        <li class="list ">{{@$empdata->benefits}}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md " style="margin-top:-30px;" id="data">
                    <input type="hidden" name="" id="did">
                    <div class="card p-3 mb-5 bg-white rounded  ">
                      <h5  style="margin:0px" class="card-title bold text-primary">About company</h5>
                      <?php
                         $countries = DB::table('countries')->where('id',$empdata->country)->first();
                          $job_type = DB::table('job_types')->where('id',$empdata->job_type)->first();
                        // dd($job_type);
                         
                        ?>
                      <p  style="margin:0px" class="card-text">about comapny</p>
                      <p class=""  style="margin:0px">New York USA</p>

                      <ul class=" ml-3"  style="margin:0px">
                    <li class="list ">
                        <?php
                         $countries = DB::table('countries')->where('id',$empdata->country)->first();
                          $state = DB::table('states')->where('id',$empdata->state)->first();
                        // dd($job_type);
                         
                        ?>
                        </li>
                    <li class="list ">{{@$state->name}}</li>

                      </ul>
                    </div>
                  </div>
                  <div class="col-md" style="margin-top:-30px;" id="data">
                    <input type="hidden" name="" id="did">
                    <div class="card  p-3 mb-5 bg-white rounded  ">
                      <h5  style="margin:0px" class="card-title bold text-primary">job type</h5>
                      <p  style="margin:0px" class="card-text">job type</p>
                      <p class=""  style="margin:0px">{{$countries->name}}</p>

                      <ul class=" ml-3"  style="margin:0px">
                        <li class="list ">{{$job_type->type}}</li>
                
                      </ul>
                    </div>
                  </div>
              </div>




              <div class="col-md-6">

                                              <div class="" id="job-detail" >
                                  <div class="col-md ">
                                      <div class="card p-3 mb-5 bg-white rounded mb-3"
                                          style="height: 710px !important; border: none !important;">
                                          <div class="container" style="overflow-y: auto; height:700px; ">
                                              <div class="row">


                          <div class="col-md-7">
                            <h5> {{@$empdata->title}}</h5>
                            <p class="text-primary m-0" style="font-size: small">Project developing LLC</p>
                            <p class="text-light-emphasis m-0" style="font-weight: 70; font-size: small;">New York | USA
                            </p>
                          </div>
                          
                          <div class="col-md">
                            <p class="text-dark-bold m-0" style="font-weight: 700; font-size: small;">Posted on : {{$empdata->created_at}} </p>
                          </div>
                        </div>

                        <div class="conatiner mt-4 border-bottom border-top" style=" width: 100%;">
                          <div class="row col-sm-12">

                            <div class="col-md-4 col-sm-4">
                              <p>
                                <li class="list mt-3 mb-3" style="font-size: small;">Lorem ipsum</li>
                              </p>

                            </div>

                            <div class="col-md-4 col-sm-4">
                              <li class="list mt-3 mb-3" style="font-size: small;">Lorem ipsum</li>

                            </div>
                            <div class="col-md-4 col-sm-4">
                              <p>
                                <li class="list mt-3 mb-3" style="font-size: small;">Lorem ipsum</li>
                              </p>

                            </div>
                          </div>

                        </div>


                        <div class="container">
                          <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
                            Lorem ipsum dolor sit amet, laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                          </p>
                          <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
                            Lorem ipsum dolor sit amet, laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                          </p>
                        </div>


                        <div class="container">
                          <h3>About this</h3>
                          
                          <ul>
                          <li>
                            <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
                               lorem Ipsum dolor sit 
                            </p>
                          </li>

                          <li >
                            <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
                               lorem Ipsum dolor sit 
                            </p>
                          </li>
                          <li>
                            <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
                               lorem Ipsum dolor sit 
                            </p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                                            <?php
                                            $id=Auth::user();
                                    
                                            if($id!=null){
                                            $user_id = $id->id;
                                            ?>
                     
                                                @if ($empdata->website_url != null)
                                                    
                                                    <a class="apply  text-center" href="{{$empdata->website_url}}"> Apply Now</a>
                                                @else
                                            
                                                <a class="apply text-center" href="{{url('apply/'.$user_id.'/'.$empdata->id.'/'.$empdata->user_id)}}">Apply Now</a>

                                                @endif
                                                <?php }else{ ?>

                                                <a class="apply text-center" href="{{url('/login')}}">Apply Now</a>
                                                    <?php } ?>
                    </div>
                  </div>

                </div>



              </div>

            </div>
          </div>
        </div>
      

    <!-- ======= Details Section ======= -->
 
    <!-- ======= Pricing Section ======= -->
 <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

  </main><!-- End #main -->

@endsection
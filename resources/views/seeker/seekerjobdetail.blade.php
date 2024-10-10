@extends('layout.employer')
@section('title', 'Affilly')
@section('content')
  <main id="main">



    <section id="" class="features">


    
       
     
       


          <div class="container  col-sm-12" style="margin-top: 60px; ">
            <div class="row">
                
                

   


              <div class="col-md-6"  style="">
               
                  <div class="col-md" id="data">
                    <input type="hidden" name="" id="did">
                    <div class="card border border-primary  shadow-lg p-3 mb-5 bg-white rounded  ">
                      <h5  style="margin:0px" class="card-title bold text-primary">Benefits</h5>
                      <p  style="margin:0px" class="card-text">company_name</p>
                      <p class=""  style="margin:0px">New York USA</p>

                      <ul class=" ml-3"  style="margin:0px">
                        <li class="list ">job->benefits</li>
                        <li class="list">job->job_skill</li>
                        <li class="list ">min max salary/li>
                        <li class="list">job location</li>

                      </ul>
                    </div>
                  </div>
                  <div class="col-md " style="margin-top:-30px;" id="data">
                    <input type="hidden" name="" id="did">
                    <div class="card border border-primary  shadow-lg p-3 mb-5 bg-white rounded  ">
                      <h5  style="margin:0px" class="card-title bold text-primary">About comapny</h5>
                      <p  style="margin:0px" class="card-text">about comapny</p>
                      <p class=""  style="margin:0px">New York USA</p>

                      <ul class=" ml-3"  style="margin:0px">
                        <li class="list ">job->benefits</li>
                        <li class="list">job->job_skill</li>
                        <li class="list ">min max salary/li>
                        <li class="list">job location</li>

                      </ul>
                    </div>
                  </div>
                  <div class="col-md" style="margin-top:-30px;" id="data">
                    <input type="hidden" name="" id="did">
                    <div class="card border border-primary  shadow-lg p-3 mb-5 bg-white rounded  ">
                      <h5  style="margin:0px" class="card-title bold text-primary">job type</h5>
                      <p  style="margin:0px" class="card-text">job type</p>
                      <p class=""  style="margin:0px">New York USA</p>

                      <ul class=" ml-3"  style="margin:0px">
                        <li class="list ">job->benefits</li>
                        <li class="list">job->job_skill</li>
                        <li class="list ">min max salary/li>
                        <li class="list">job location</li>

                      </ul>
                    </div>
                  </div>
            



              </div>




              <div class="col-md-6">

                <div class="container" id="job-detail">
                  <div class="col-md">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded mb-3  "
                      style="height: 645px !important; border: none !important;">
                      <div class="container">
                        <div class="row">

                          <div class="col-md-7">
                            <h5> {{$empdata->title}}</h5>
                            <p class="text-primary m-0" style="font-size: small">Project developing LLC</p>
                            <p class="text-light-emphasis m-0" style="font-weight: 70; font-size: small;">New York | USA
                            </p>
                          </div>
                          
                          <div class="col-md">
                            <p class="text-dark-bold m-0" style="font-weight: 700; font-size: small;">Posted on : </p>
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
                          <p class="text-right mt-3" style="font-weight: 100; font-size: small;"> 
                            Lorem ipsum dolor sit amet, laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                          </p>
                          <p class="text-right mt-3" style="font-weight: 100; font-size: small;"> 
                            Lorem ipsum dolor sit amet, laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                          </p>
                        </div>


                        <div class="container">
                          <h3>About this</h3>
                          
                          <ul>
                          <li>
                            <p class="text-right mt-3" style="font-weight: 100; font-size: small;"> 
                               lorem Ipsum dolor sit 
                            </p>
                          </li>

                          <li >
                            <p class="text-right mt-3" style="font-weight: 100; font-size: small;"> 
                               lorem Ipsum dolor sit 
                            </p>
                          </li>
                          <li>
                            <p class="text-right mt-3" style="font-weight: 100; font-size: small;"> 
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

                                                @if ($empdata->website_url!=null)
                                                
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
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
 
    <!-- ======= Pricing Section ======= -->
 <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

  </main><!-- End #main -->

@endsection
@extends('front_layout')
@section('header')

  <main id="main">



    <section id="" class="features">


      <div class="container  ml-4" style="margin-left:180px; margin-top: 100px;">



     
      <div class="container">
        <div class="row no-gutters">
       


          {{-- <div class="container  col-sm-12" style="margin-left: 60px; margin-top: 60px; "> --}}
        
            
                  <div class="container ml-5 col-md-12 row">
                
                
<h1>asdasdadasds</h1>

                @foreach ($jobs as $job )
                  
                  <div class="col-md-4">
                    <div style="padding:10px !important" class=" card   p-3 mb-5 bg-white rounded mb-3  " style="border: none; !important;">
                        <div class="box">
                            <div class="box-body">	
                                <div class="d-flex flex-wrap align-items-center">							
                                    <div class="mr-25 bg-danger-light h-60 w-60 rounded text-center b-1">
                                          <img style="width:50px; height:50px;  !important" src="{{ asset('uploads/jobpost/logo') }}/{{ $job->logo }}" class="align-self-center" alt="">
                                    </div>
      
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
                                        <span class="text-fade font-weight-600 font-size-16">
                                            Globela Inc.
                                        </span>
                                        <a href="#"  style="font-size:small; font-weight:100;" class="text-dark font-weight-600 hover-danger font-size-18">
                                          {{$job->title}}
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-20">
                                    <h4 class="text-primary mb-20 ml-3">$1,200 - $1,800</h4>
                              {{-- <p>{!!Str::limit($job->job_description,20) !!} </p> --}}
                              <p style="font-size: small; " class="ml-3">
                                {!!Str::limit($job->job_description,20) !!}
                                 </p>
      
                                    <div class="d-flex flex-column w-p100 mt-30 ml-3">
                                        <span style="font-size: small" class="text-dark mr-10 font-size-16 font-weight-600 pb-15">
                                            Opening Jobs (15/20)
                                        </span>
      
                                        <div class="progress progress-xs w-p100  " style="height: 10px !important">
                                            <div  class="progress-bar bg-danger "  role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mt-10 d-flex justify-content-between align-items-center">
                                        <a href="jobs-details.html " class=" btn btn-primary mt-3 mb-2 ml-3">View Applications</a>
                                        {{-- <p  class="mt-4 text-fade"> Miami</p> --}}
                                    </div>
                                </div>
                            </div>					
                        </div>
                    </div>
                  </div>

                  @endforeach


                




              



             


                



              </div>




             

            </div>





          </div>
        </div>



     
      
    
  

    
    </section><!-- End App Features Section -->

  
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


  </main><!-- End #main -->


@endsection
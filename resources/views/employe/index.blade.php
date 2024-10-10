@extends('layout.employer')
@section('title','Affilly')
@section('content')
<div class="content-wrapper" style="min-height: 214px;">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              @if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
        @if(Session::has('danger'))
<p class="alert alert-danger">{{ Session::get('danger') }}</p>
@endif
             <div class="col-3">
						  <a class="box box-link-shadow text-center" href="javascript:void(0)">
							<div class="box-body">
								<div class="fs-24">{{@$total_jobs}}</div>
								<span>Total Jobs</span>
							</div>
							<!--<div class="box-body bg-info btsr-0 bter-0">-->
							<!--	<p>-->
							<!--		<span class="mdi mdi-ticket-confirmation fs-30"></span>-->
							<!--	</p>-->
							<!--</div>-->
						  </a>
						  </div>
             <div class="col-3">

						  <a class="box box-link-shadow text-center" href="javascript:void(0)">
							<div class="box-body">
								<div class="fs-24">{{@$total_users}}</div>
								<span>Total Employees</span>
							</div>
							<!--<div class="box-body bg-success btsr-0 bter-0">-->
							<!--	<p>-->
							<!--		<span class="mdi mdi-thumb-up-outline fs-30"></span>-->
							<!--	</p>-->
							<!--</div>-->
						  </a>
					  </div>
					  <div class="col-3">
					  	  <a class="box box-link-shadow text-center" href="javascript:void(0)">
							<div class="box-body">
								<div class="fs-24">{{@$job_apply}}</div>
								<span>Total Applicants</span>
							</div>
						
						  </a>
						  
					  </div>
				  <div class="col-3">
					  	  <a class="box box-link-shadow text-center" href="javascript:void(0)">
							<div class="box-body">
								<div class="fs-24">{{@$total_views}}</div>
								<span>Total Job View's</span>
							</div>
							<!--<div class="box-body bg-danger btsr-0 bter-0">-->
							<!--	<p>-->
							<!--		<span class="mdi mdi-message-reply-text fs-30"></span>-->
							<!--	</p>-->
							<!--</div>-->
						  </a>
						  
					  </div>
            
            <div class="col-3">
					  	  <a class="box box-link-shadow text-center" href="javascript:void(0)">
							<div class="box-body">
								<div class="fs-24">{{@$total_selected}}</div>
								<span>Selected Seekers</span>
							</div>
							<!--<div class="box-body bg-danger btsr-0 bter-0">-->
							<!--	<p>-->
							<!--		<span class="mdi mdi-message-reply-text fs-30"></span>-->
							<!--	</p>-->
							<!--</div>-->
						  </a>
						  
					  </div>
            

              {{-- <div class="col-lg-4 col-12">
                  <div class="box">
                      <div class="box-body">	
                          <div class="d-flex flex-wrap align-items-center">							
                              <div class="me-25 bg-danger-light h-60 w-60 rounded text-center b-1">
                                    <img src="../images/logo/logo-5.jpg" class="align-self-center" alt="">
                              </div>

                              <div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pe-15">
                                  <span class="text-fade fw-600 fs-16">
                                       Indiva Services.
                                  </span>
                                  <a href="#" class="text-dark fw-600 hover-danger fs-18">
                                      Fashion Consultant
                                  </a>
                              </div>
                          </div>
                          <div class="mt-20">
                              <h4 class="text-primary mb-20">$1,200 - $1,800</h4>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

                              <div class="d-flex flex-column w-p100 mt-30">
                                  <span class="text-dark me-10 fs-16 fw-600 pb-15">
                                      Opening Jobs (15/20)
                                  </span>

                                  <div class="progress progress-xs w-p100">
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                              <div class="mt-10 d-flex justify-content-between align-items-center">
                                  <a href="jobs-details.html" class="waves-effect waves-light btn btn-primary mb-5">View Applications</a>
                                  <p class="mb-0 text-fade"><i class="fa fa-map-marker"></i> Miami</p>
                              </div>
                          </div>
                      </div>					
                  </div>
              </div> --}}
          </div>
      </section>
      <!-- /.content -->
    
    </div>
</div>

  </div>
  @endsection
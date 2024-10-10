@extends('layout.seeker')
@section('title','Affilly')
@section('content')
<div class="content-wrapper bg-light" style="min-height: 1091px;">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
          <div class="row">


            @foreach ($jobs as $job )
                
           
              <div class="col-lg-4 col-12 " style="border-style:none;">
                  <div class="box">
                      <div class="box-body">	
                          <div class="d-flex flex-wrap align-items-center">							
                              <div class="mr-25 h-60 w-60 rounded text-center b-1">
                                    <img src="{{ asset('uploads/jobpost/logo') }}/{{ $job->logo }}" class="align-self-center" alt="">
                              </div>

                              <div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pr-15">
                                  <span class="text-fade font-weight-600 font-size-16">
                                      Globela Inc.
                                  </span>
                                  <a href="#" class="text-dark font-weight-600 hover-danger font-size-18">
                                      {{$job->title}}
                                  </a>
                              </div>
                          </div>
                          <div class="mt-20">
                              <h4 class="text-primary mb-20">$-{{$job->salary}}
                            </h4>
                              <p>{!!Str::limit($job->job_description,20) !!} </p>

                              <div class="d-flex flex-column w-p100 mt-30">
                                  <span class="text-dark mr-10 font-size-16 font-weight-600 pb-15">
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
              </div>

              @endforeach

          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
@endsection
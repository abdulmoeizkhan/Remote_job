@extends('front_layout')
@section('header')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>
    .form-control-outline{}
    input:focus{
       outline: none;
   }
   input::placeholder {
       font: 15px sans-serif;
   }
   .select2-container--default .select2-selection--single {
  border: none;
  outline: none; / Optional, removes the blue focus outline on select /
}
</style> 
  <main id="main">
      
      <section id="" class="features">


            <div class=" col-md-12 d-flex justify-content-center ">
            <form action="{{ url('find-jobs') }}" method="post">
                <div class="col-md-12 justify-content-center" style=" margin-top: 60px; ">
                        <div class=" row">
                        @csrf
                           

                           <div class="col-md-4  mpr-0 form-control-outline" style="border-radius: 10rem; width:292px;">
                              <div class="input-group-text "  style="border-radius: 10rem; background-color:white; width:256px;" ><b>what:</b>
                                <div class="input-group-prepend" style="border-radius: 10rem; background-color:white">
                              
                              <input type="text" name="keyword" style="border-radius:15rem; border:none; width:199px;" 
                              class="" placeholder="job title,keyword,company" fdprocessedid="d2zulj">
                            </div>  
                                  </div>
                                </div>
                                
                                <div class="col-md-4 mpr-0  form-control-outline" style="border-radius:10rem;">
                                    <div class="input-group-text" style="border-radius: 10rem; background-color:white; width:256px;"><b>where:</b>
                                      <div class="input-group-prepend" style="border-radius: 10rem; background-color:white">
                                <select name="job_country" style="border-radius: 10rem;" id="single" class=" form-control   js-states " 
                                    fdprocessedid="ujzmak">
                                    
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div></div>    
                            </div>
                            <div class="col-md-4 mpr-0" style="border-radius:10rem;">
                                  <div class="input-group-prepend" style="border-radius: 10rem; background-color:white ">
                                <input type="submit" value="Find Jobs" style="border-radius: 10rem; width:200px;"
                                    class=" bg-primary text-light form-control  "
                                    placeholder="Keyword" fdprocessedid="d2zulj">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-1"></div> --}}
                </div>     
                    </form>
                      
            {{-- </div> --}}
      
        </div>  
           


        



            </div>
            </div>
            </div>
       
            </div>

            </div>
        </section>
      
    <section id="" class="features" style="background:white">



<div class="container">
<div class="row">
    @foreach ($jobs as $job )
    <div class="col-lg-4 col-sm-4">
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title">{{$job->title}}</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-primary">
                            <?php
                            $logo = DB::table('employees')->where('id',$job->company_id)->first();
                            // echo $logo->logo; 
                            ?>
                            <img src="{{asset('uploads/employe/logo/'.$logo->logo)}}" class="widget-49-date-primary">
                            </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">{{$logo->company_name}}</span>
                            <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item"><span>{{$job->benefits}}</span></li>
                        <li class="widget-49-meeting-item"><span>salary:min${{$job->salary}}-max${{$job->maxsalary}} </span></li>
                        <li class="widget-49-meeting-item"><span>Posting date: {{$job->posting_Date}} </span></li>
                    </ol>
                    <div class="widget-49-meeting-action">
                        <a href="{{url('/jobDetail/'.$job->id)}}" class="btn btn-sm btn-flash-border-primary">View details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
</div>
</div>

    </section><!-- End App Features Section -->

  
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


  </main><!-- End #main -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- Select2 -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
 <script>
   $("#single").select2({
       placeholder: "United State",
     
       allowClear: true
   });
   </script>

@endsection
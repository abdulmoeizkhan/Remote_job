@extends('front_layout')
@section('header')





  <main id="main">



    <section id="" class="features">
 


<div class="container mt-5">
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
                        <a href="#" class="btn btn-sm btn-flash-border-primary">View details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!--<div class="col-lg-4">-->
    <!--    <div class="card card-margin">-->
    <!--        <div class="card-header no-border">-->
    <!--            <h5 class="card-title">MOM</h5>-->
    <!--        </div>-->
    <!--        <div class="card-body pt-0">-->
    <!--            <div class="widget-49">-->
    <!--                <div class="widget-49-title-wrapper">-->
    <!--                    <div class="widget-49-date-warning">-->
    <!--                        <span class="widget-49-date-day">13</span>-->
    <!--                        <span class="widget-49-date-month">apr</span>-->
    <!--                    </div>-->
    <!--                    <div class="widget-49-meeting-info">-->
    <!--                        <span class="widget-49-pro-title">PRO-08235 Lexa Corp.</span>-->
    <!--                        <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <ol class="widget-49-meeting-points">-->
    <!--                    <li class="widget-49-meeting-item"><span>Scheming module is removed</span></li>-->
    <!--                    <li class="widget-49-meeting-item"><span>App design contract confirmed</span></li>-->
    <!--                    <li class="widget-49-meeting-item"><span>Client request to send invoice</span></li>-->
    <!--                </ol>-->
    <!--                <div class="widget-49-meeting-action">-->
    <!--                    <a href="#" class="btn btn-sm btn-flash-border-warning">View All</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="col-lg-4">-->
    <!--    <div class="card card-margin">-->
    <!--        <div class="card-header no-border">-->
    <!--            <h5 class="card-title">MOM</h5>-->
    <!--        </div>-->
    <!--        <div class="card-body pt-0">-->
    <!--            <div class="widget-49">-->
    <!--                <div class="widget-49-title-wrapper">-->
    <!--                    <div class="widget-49-date-success">-->
    <!--                        <span class="widget-49-date-day">22</span>-->
    <!--                        <span class="widget-49-date-month">apr</span>-->
    <!--                    </div>-->
    <!--                    <div class="widget-49-meeting-info">-->
    <!--                        <span class="widget-49-pro-title">PRO-027865 Opera module</span>-->
    <!--                        <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <ol class="widget-49-meeting-points">-->
    <!--                    <li class="widget-49-meeting-item"><span>Scope is revised and updated</span></li>-->
    <!--                    <li class="widget-49-meeting-item"><span>Time-line has been changed</span></li>-->
    <!--                    <li class="widget-49-meeting-item"><span>Received approval to start wire-frame</span></li>-->
    <!--                </ol>-->
    <!--                <div class="widget-49-meeting-action">-->
    <!--                    <a href="#" class="btn btn-sm btn-flash-border-success">View All</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</div>
</div>
              </div>
            </div>
          </div>
        </div>
    </section><!-- End App Features Section -->

  
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


  </main><!-- End #main -->


@endsection
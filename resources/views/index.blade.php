@extends('front_layout')
@section('header')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .my-card {
            border: 0.2px solid #E4E4ED !important;
        }

        .my-card:hover {
            border-color: #007bff !important;
        }

        .listcss {
            list-style: none;
            /* Hide the default bullet */
        }

        .listcss::before {
            text-align: center;
            content: '\2022';
            /* Unicode character for bullet (•)*/
            color: #007bff;
            /* Change the color of the bullet here (e.g., red) */
            font-size: 1.2em;
            display: inline-block;
            /* width: 1em; */
            margin-right: 7px;
            /* font-size: small */
        }

        /* Add any other styles you need for the list items */
        /* .font-weight-light {
                /* Add your font styles here */
        /* } */
        /* .form-control-outline {} */

        input:focus {
            outline: none;
        }

        input::placeholder {
            font: 15px sans-serif;
        }

        .select2-container--default .select2-selection--single {
            border: none;
            outline: none;
            /* Optional, removes the blue focus outline on select */
        }

        @media only screen and (max-width: 766px) and (min-width: 200px) {
            .media {
                /* margin-top:15%; */

            }

            .findbtn {
                margin-left: 28px;
            }

            .navbtndiv {
                margin-bottom: 20px;
            }

            .navinput {
                width: 40%;
                margin: 0px auto;

            }
        }
    </style>

    <main id="main">
        <section id="contact" class="contact">


            <div class=" col-md-12 d-flex justify-content-center ">

                <form action="{{ url('find-jobs') }}" method="post">
                    <div class="col-md-12 justify-content-center" style=" margin-top: 60px; ">
                        <div class=" row">
                            @csrf


                            <div class="col-md-4 navbtndiv mpr-0 form-control-outline"
                                style="border-radius: 10rem; width:40;">
                                <div class="input-group-text navinput"
                                    style="border-radius: 10rem; background-color:white; width:256px;"><b>what:</b>
                                    <div class="input-group-prepend" style="border-radius: 10rem; background-color:white">

                                        <input type="text" name="keyword"
                                            style="border-radius:15rem; border:none; width:199px;" class=""
                                            placeholder="job title,keyword,company" fdprocessedid="d2zulj">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 navbtndiv mpr-0  form-control-outline" style="border-radius:10rem;">
                                <div class="input-group-text navinput"
                                    style="border-radius: 10rem; background-color:white; width:256px;"><b>where:</b>
                                    <div class="input-group-prepend" style="border-radius: 10rem; background-color:white">
                                        <select name="job_country" style="border-radius: 10rem;" id="single"
                                            class=" form-control  js-states " fdprocessedid="ujzmak">

                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4  navbtndiv mpr-0 " style=" border:none; outline: none; width:40;">
                                
                                <div  class="input-group-text navinput"style="border:none; outline: none; background-color:white; width:256px;">

                                    <input type="submit" 
                                        style="border-radius: 10rem; width:250px; margin-top:-5px;" value="Find Jobs"
                                        class="btn btn-primary" fdprocessedid="d2zulj">
                                </div>
                            </div>
                            {{-- <div class="col-md-4 findbtn mpr-0" style="border-radius:10rem; width:40;">
                              
                                <div class="input-group-prepend navinput" style="border-radius: 10rem;  background-color:white ">
                                
                                    <input type="submit"  value="Find Jobs" style="border-radius: 10rem; width:40;"
                                        class=" bg-primary text-light form-control" placeholder="Keyword"
                                        fdprocessedid="d2zulj">
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </form>



            </div>




            <div class="col-md-12" style="margin-top:30px;">
                <div class="container">

                    <div class="row no-gutters">


                        <div class="col-md-5">
                            @foreach ($jobs as $job)
                                <div class="" style="margin-bottom:-20px;" id="data"
                                    onclick="fetchdata({{ $job->id }})">
                                    <input type="hidden" name="" id="did">
                                    <div class="card my-card  p-3 mb-5 bg-white" style="border-radius: 8px;">
                                        <div class="row">
                                            <p style="color:#0061FF;  font-size:18px; font-weight:600; margin:0px"
                                                class="">Backend software Engineer
                                                <span style="float: right;">
                                            
                                            <!--<i class="fa-solid fa-heart" id="icon" onclick="icon({{ $job->id }})" style="color: #0061ff; font-size:25px;"></i>-->
                                      <?php 
                                      $check = null;
                                      if(Auth::user()){
                                          $user_id =Auth::user()->id;
                                      $check = App\Models\Favjob::where('user_id',$user_id)->where('job_id',$job->id)->first();
                                      }
                                      
                                      
                                      
                                       ?>
                                            <i class="  
                                            <?php 
                                            if($check!=null){
                                                echo 'fa-solid';
                                            }else{
                                                echo 'fa-regular';
                                            }      
                                            ?>
                                            fa-heart" id="icon" onclick="icon({{ $job->id }})" style="color: #0061ff; font-size:25px;"></i>

                                           
                                           </span>
                                            </p>

                                        </div>
                                        <p style="margin:0px; color:#171728; font-size:15px; font-weight:400; "
                                            class="card-text ">{{ $job->company_name }}</p>
                                        <p class=""
                                            style="margin:0px; font-size:14px; color:#91909b; font-weight:400;">New York |
                                            USA</p>


                                        <li class="listcss " style=" font-size:14px; color:#686781; font-weight:400;">
                                            {{ $job->benefits }}</li>
                                        <li class="listcss " style=" font-size:14px; color:#686781; font-weight:400;">
                                            {{ $job->job_skill }}</li>
                                        <li class="listcss " style=" font-size:14px; color:#686781; font-weight:400;">
                                            ${{ $job->salary }}-${{ $job->maxsalary }}</li>

                                        <p
                                            style="margin-top:9px; margin-bottom:-4px; font-size:12px; line-height:13px; color:#686781; font-weight:400;">
                                            Placed more than 30 days ago</p>
                                    </div>
                                </div>
                            @endforeach



                            <div class="col-md- " style="margin-top: -40px;">
                                <a href="{{ url('seekerjobs') }}" style="border-radius: 10rem;"
                                    class="btn btn-primary  btn-block">
                                    More Remote Jobs
                                </a>


                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="" id="job-detail">
                                <div class="col-md ">
                                    <div class="card p-3 mb-5 bg-white rounded mb-3"
                                        style="height: 710px !important; border: none !important;">
                                        <div class="container" style="overflow-y: auto; height:700px; ">
                                            <div class="row">

                                                <div class="col-md-7">
                                                    <p style="margin:0; font-size:24px; font-weight:500;"> Backend software
                                                        Engineer</p>
                                                    <p class=""
                                                        style="margin:0px; font-size:18px; color:#0061FF; font-weight:200;">
                                                        Project
                                                        developing LLC</p>
                                                    <p class=""
                                                        style="margin:0px; font-size:18px; color:#91909b; font-weight:400;">
                                                        New York | USA
                                                    </p>
                                                </div>

                                                <div class="col-md">
                                                    <p class="text-dark-bold m-0"
                                                        style="font-weight: 700; font-size: small;">Posted on : </p>
                                                </div>
                                            </div>

                                            <div class="conatiner mt-4 border-bottom border-top" style=" width: 100%;">
                                                <div class="row col-sm-12">

                                                    <div class="col-md-4 col-sm-4">
                                                        <p>
                                                            <li class="listcss list mt-3 mb-3" style="font-size: small;">
                                                                Lorem
                                                                ipsum</li>
                                                        </p>

                                                    </div>

                                                    <div class="col-md-4 col-sm-4">
                                                        <li class="listcss list mt-3 mb-3" style="font-size: small;">Lorem
                                                            ipsum</li>

                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <p>
                                                            <li class="listcss list mt-3 mb-3" style="font-size: small;">
                                                                Lorem
                                                                ipsum</li>
                                                        </p>

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="container">

                                                <p class="text-left mt-3"
                                                    style="margin:0px; font-size:14px; color:#686781; font-weight:400;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat
                                                </p>

                                                <p class="text-left mt-3"
                                                    style="margin:0px; font-size:14px; color:#686781; font-weight:400;">
                                                   
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>

                                            </div>


                                            <div class="container">
                                                <h3 class="mt-3">About this</h3>

                                                <p class="text-left mt-3"
                                                    style="margin:0px; font-size:14px; color:#686781; font-weight:400;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat
                                                </p>

                                                
                                                    <li class="listcss mt-4"
                                                        style="margin:0px; font-size:14px; color:#686781; font-weight:400;">
                                                        Duis aute irure dolor in reprehenderit 

                                                    </li>

                                                    <li class="listcss"
                                                        style="margin:0px; font-size:14px; color:#686781; font-weight:400;">
                                                        In voluptate velit esse cillum dolore eu fugiat

                                                    </li>
                                                    <li class="listcss"
                                                        style="margin:0px; font-size:14px; color:#686781; font-weight:400;">
                                                        Nulla pariatur

                                                    </li>
                                                    <li class="listcss"
                                                    style="margin:0px; font-size:14px; color:#686781; font-weight:400;">
                                                    Excepteur sint occaecat cupidatat 

                                                </li>
                                               


                                            </div>

                                        </div>
                                        <center>
                                        <input type="submit" name="keyword"
                                        style="background:#E7F3FD; color:#13AAFF; border-radius:10rem; height:40px; width:250px; border:none; margin:0px; " value="Apply Now"
                                        class="text-center" fdprocessedid="d2zulj">
                                    </center>
                                        {{-- <a class="apply  text-center" href="">Apply Now</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- </div> --}}



                </div>
            </div>

        </section>
        <!-- End App Features Section -->
        <!-- ======= Frequently Asked Questions Section ======= -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="margin-top:-100px;">



            <div class="container">
                <div class="row no-gutters">
                    <div class="container  col-md-12" style="">


                        <h1 class="mb-5">Remote Work Article</h1>

                        <div class="row">
                            @foreach($articles as $a)
                            <div class="col-md-4 mb-5">

                                <div class="card w-100 h-60" style="border-radius: 0.5rem;">
                                    <div class="card-body m-2">
                                        <h5 class="card-title text-dark text-left"> {{Str::limit($a->title, 54)}} </h5>
                                        <p class="text-secondary text-sm-left" style="font-size: small;">
                                           {{Str::limit($a->content, 161)}} 
                                        </p>
                                        <button class="bg-primary text-light text-center"
                                            style="border-radius:15rem; border:none; height:33px; width:150px;">Read
                                            Artical </button>

                                    </div>
                                </div>

                            </div>

                            @endforeach
                            
                            <!--<div class="col-md-4">-->

                            <!--    <div class="card w-100 h-60" style="border-radius: 0.5rem;">-->
                            <!--        <div class="card-body m-2">-->
                            <!--            <h5 class="card-title text-dark text-left">Lorem ipsum consectetur adipiscing elit-->
                            <!--                sed do eiusmod</h5>-->
                            <!--            <p class="text-secondary text-sm-left" style="font-size: small;">With supporting-->
                            <!--                text below as a-->
                            <!--                natural lead-in to additional content.-->
                            <!--                With supporting text below as a natural lead-in to additional content.With-->
                            <!--            </p>-->
                            <!--            <button class="bg-primary text-light text-center"-->
                            <!--                style="border-radius:15rem; border:none; height:33px; width:150px;">Read-->
                            <!--                Artical </button>-->

                            <!--        </div>-->
                            <!--    </div>-->

                            <!--</div>-->

                            <!--<div class="col-md-4">-->

                            <!--    <div class="card w-100 h-60" style="border-radius: 0.5rem;">-->
                            <!--        <div class="card-body m-2">-->
                            <!--            <h5 class="card-title text-dark text-left">Lorem ipsum consectetur adipiscing elit-->
                            <!--                sed do eiusmod</h5>-->
                            <!--            <p class="text-secondary text-sm-left" style="font-size: small;">With supporting-->
                            <!--                text below as a-->
                            <!--                natural lead-in to additional content.-->
                            <!--                With supporting text below as a natural lead-in to additional content.With-->
                            <!--            </p>-->
                            <!--            <button class="bg-primary text-light text-center"-->
                            <!--                style="border-radius:15rem; border:none; height:33px; width:150px;">Read-->
                            <!--                Artical </button>-->

                            <!--        </div>-->
                            <!--    </div>-->

                            <!--</div>-->

                            <!--<div class="col-md-4">-->

                            <!--    <div class="card w-100 h-60" style="border-radius: 0.5rem;">-->
                            <!--        <div class="card-body m-2">-->
                            <!--            <h5 class="card-title text-dark text-left">Lorem ipsum consectetur adipiscing elit-->
                            <!--                sed do eiusmod</h5>-->
                            <!--            <p class="text-secondary text-sm-left" style="font-size: small;">With supporting-->
                            <!--                text below as a-->
                            <!--                natural lead-in to additional content.-->
                            <!--                With supporting text below as a natural lead-in to additional content.With-->
                            <!--            </p>-->
                            <!--            <button class="bg-primary text-light text-center"-->
                            <!--                style="border-radius:15rem; border:none; height:33px; width:150px;">Read-->
                            <!--                Artical </button>-->

                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>



            <div class="container">
                <div class="row no-gutters">
                    <div class="container  col-md-12" style=" margin-top: 60px; ">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="card w-100 h-100 bg-primary" style="border-radius: 0.5rem;">
                                    <div class="card-body m-4">
                                        <h3 class="card-title text-light">Find Remotes Jobs</h3>
                                        <p class="text-light" style="font-size: small;">With supporting text below as a
                                            Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi</p>
 
                                            <input type="submit" name="keyword"
                                            style="border-radius: 10rem; width:250px; margin:0px;" value="Post a remote job"
                                            class="btn btn-light text-primary" fdprocessedid="d2zulj">

                                    </div>
                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="card w-100 h-100" style="border-radius: 0.5rem;">
                                    <div class="card-body m-4">
                                        <h3 class="card-title text-dark">Post Remote jobs</h3>
                                        <p class="text-dark" style="font-size: small;">With supporting text below as a
                                            Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi</p>

                                                <input type="submit" name="keyword"
                                                    style="border-radius: 10rem; width:250px; margin:0px;" value="Search for a remote job"
                                                    class="btn btn-primary" fdprocessedid="d2zulj">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section><!-- End Contact Section -->


    </main><!-- End #main -->
<script>
function icon(id){
    // alert(id);
    
    
  

            $.ajax({
                url: "{{ url('user_fav_jobs') }}",
                type: "POST",
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },

                success: function(result) {
                    console.log(result)
                   

                }

            });
}


</script>
@endsection


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
                      style="font-weight: 700; font-size: small;">Posted on : <span style="color: #91909b; font-weight:200;"> {{$jobs->posting_Date}}</span>  </p>
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



{{-- <div class="col-md">
    <div class="card  shadow-lg p-3 mb-5 bg-white rounded mb-3  "
      style="height: 720px !important; border:none !important;">
      <div class="container">
        <div class="row">

          <div class="col-md-7">
            <h5>  {{$jobs->title}}</h5>
            <p class="text-primary m-0" style="font-size: small">{{$jobs->company_name}}</p>
            <p class="text-light-emphasis m-0" style="font-weight: 70; font-size: small;">New York | USA
            </p>
          </div>
          
          <div class="col-md">
            <p class="text-dark-bold m-0" style="font-weight: 700; font-size: small;">Posted on :{{$jobs->posting_Date}} </p>
          </div>
        </div>

        <div class="conatiner mt-4 border-bottom border-top" style=" width: 100%;">
          <div class="row col-sm-12">

            <div class="col-md-4 col-sm-4">
              <p>
                <li class="list mt-3 mb-3" style="font-size: small;">{{$jobs->location}}</li>
              </p>

            </div>

            <div class="col-md-4 col-sm-4">
              <li class="list mt-3 mb-3" style="font-size: small;">${{$jobs->salary}}-${{$jobs->maxsalary}}</li>

            </div>
            <div class="col-md-4 col-sm-4">
              <p>
                <li class="list mt-3 mb-3" style="font-size: small;">{{$jobs->job_category}}</li>
              </p>

            </div>
          </div>

        </div>


        <div class="container">
          <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
          {{$jobs->job_description}}
          </p>
          <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
            Lorem ipsum dolor sit amet, laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
          </p>
        </div>


        <div class="container">
          <h3>About this
          {{JobType($jobs->job_type)}}</h3>
          
          <ul>
          <li>
            <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
              {{$jobs->benefits}} 
            </p>
          </li>

          <li >
            <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
              {{$jobs->qualification}} 
            </p>
          </li>
          <li>
            <p class="text-left mt-3" style="font-weight: 100; font-size: small;"> 
               <!--{{$jobs->responsiblities}} -->
            </p>
          </li>
        </ul>

        
      </div>
      
    </div>
    
    <a class="apply  text-center" href=""> Apply Now</a>
    
    </div>
  </div> --}}
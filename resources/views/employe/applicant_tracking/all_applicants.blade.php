@extends('layout.employer')
@section('title', 'Affilly')
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

<div class="col-12">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">{{@$heading}}</h4>

					  		<form method="get" action="{{url('applicant_search')}}">
                          <div class="row">
                        
                            <div class="col">
                              <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2"  class="sr-only">Date</label>
                            <input type="date" name="start_date" value="{{  @$_GET['start_date'] }}" class="form-control" id="inputPassword2">
                            </div>
                            </div>
                            <div class="col">
                            <!--<input type="hidden" id="search_type" name="search_type">-->
                            <div class="form-group mx-sm-3 mb-2">
                            <input type="date" name="end_date" class="form-control" value="{{@$_GET['end_date'] }}" >
                            </div>
                            </div>
                            <div class="col">
                               <div class="form-group mx-sm-3 mb-2">
                            
                            <input type="submit" class="btn btn-primary form-control" id="nputPassword3">
                            </div>
                              <!--<input type="submit" value="Search">-->
                            </div>
                          </div>
                        </form>
							<!--<a href="{{ url('employe_applicant_tracking') }}" class="btn btn-primary">Action</a>-->
						</div>
					</div>
				  </div>
				</div>
                    <div class="col-12">
                        <div class="box">
                            
                            <div class="box-body">
                                <div class="table-responsive">
                                <div class="col-sm-12">
    <table id="example6" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                              <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="#ID: activate to sort column descending"
                                                        style="width: 34.4062px;">#ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 47.4922px;">Email</th>
                                                        

                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Applied Date: activate to sort column ascending"
                                                        style="width: 63.1719px;">First Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Company: activate to sort column ascending"
                                                        style="width: 154.516px;">Last Name</th>
                                                   
                                                    
                                                    
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Phone</th>
                                                       
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Job Title Applied</th>
                                                             <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Company Applied</th>
                                                             <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Date Applied</th>
                                                        
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Status</th>

                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Detail</th>
                                                        
                                                </tr>
                                            </thead>
								<tbody>

									    @foreach ($jobs as $c=> $job)
                                                
                                                <?php
                                                $job_seekers = DB::table('job_seekers')->where('email',$job->email)->first();
                                                // dd($job_seekers);
                                                ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{++$c}}</td>
                                                        <td>{{$job_seekers->email}}</td>
                                                        <td>{{$job_seekers->firstname}}</td>
                                                        <td>{{$job_seekers->lastname}}</td>
                                                        <td>{{$job_seekers->mobile}}</td>
                                                        <td>{{$job->job_title}}</td>
                                                        <td>Company Name</td>
                                                        
                                                        <td><?php echo date('Y-m-d',strtotime($job->created_at));?></td>
                                                       <td>@if($job->job_status==1)
                                                       Active
                                                       @else
                                                       Deactive
                                                       @endif</td>
                                                        <td>
                                                        
                                                            
                                                            <div class="d-flex align-items-center gap-items-2">
                                                                <a href="{{ url('employee_view_seeker_details/'.$job->job_id.'/'.$job->seeker) }}"
                                                                    class="waves-effect waves-circle btn btn-circle btn-success btn-xs">
                                                                    <!--<i class="mdi mdi-phone"></i>-->
                                                                        View Details
                                                                        </a>
                                                                <!--<a href="#"-->
                                                                <!--    class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i-->
                                                                <!--        class="mdi mdi-email"></i></a>-->
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach
									
									</tbody>
							
							</table></div>


                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

 <script>
     function search_by(){
         var search_by = $('#search').val();
         $('#search_type').val(search_by)
          alert(search_by);
     }
 </script>


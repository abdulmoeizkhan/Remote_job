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
					  		<h4 class="box-title mb-md-0 mb-20">Job Applicants</h4>
							<!--<a href="#" class="btn btn-primary"><i class="fa fa-download"></i>Get Statement</a>-->
						</div>
					</div>
				  </div>
				</div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
<div class="col-sm-12"><table id="example6" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                              <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="#ID: activate to sort column descending"
                                                        style="width: 34.4062px;">#ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 47.4922px;">Title</th>
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 36.1719px;">Job Type</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 36.1719px;">Job Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Applied Date: activate to sort column ascending"
                                                        style="width: 63.1719px;">Posted Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Company: activate to sort column ascending"
                                                        style="width: 154.516px;">Expiring Date</th>
                                                   
                                                    
                                                    
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Status</th>
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Save Resume</th>
                                                </tr>
                                            </thead>
								<tbody>
									    @foreach ($jobs as $c=> $job)
                                                
                                                <?php
                                                $job_seekers = DB::table('job_seekers')->where('email',$job->email)->first();
                                                // echo $job_seekers->my_resume;
                                                ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{++$c}}</td>
                                                        <td>{{$job->email}}</td>
                                                        <td>{{JobType($job->job_type)}}</td>
                                                        <td>{{JobCategory($job->job_category)}}</td>
                                                        <td>{{$job->posting_Date}}</td>
                                                        <td>{{$job->expiry_Date}}</td>
                                                        <td> <a href="{{ url('employe-view-resume/'.$job_seekers->id) }}"> View Resume</a> </td>
                                                         
                                                         
                                                        <!--<td><span class="badge <?= $job->status==1?"badge-success-light":"badge-danger-light"?> "><?= $job->status==1?"Active":"Expire"?></span></td>-->
                                                        
                                                        
                                                        <td>
                                                            <?php
                                                             $check_resume = DB::table('saved_resume')->where('company_id',Auth::user()->company_id)->where('seeker_id',$job_seekers->id)->first();
                                                            ?>
                                                            @if(@$check_resume==null)
                                                            <a href="{{url('employe_save_cv/'.$job_seekers->id)}}" class="btn btn-primary">Save</a>    
                                                                
                                                            @else
                                                            <a href="{{url('employe_unsave_cv/'.$job_seekers->id)}}" class="btn btn-primary">Un-Save</a>
                                                            @endif
                                                            
                                                            
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



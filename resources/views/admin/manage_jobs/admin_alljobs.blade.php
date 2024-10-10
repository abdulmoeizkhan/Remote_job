@extends('layout.admin')
@section('title', 'Affilly')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  

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
					  		<h4 class="box-title mb-md-0 mb-20"> Admin View All Jobs </h4>
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
                                                        style="width: 154.516px">#JOB ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 154.516px">Employer</th>
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 36.1719px;">Job Title</th>
                                                               <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 36.1719px;">Date Created</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 36.1719px;"> Expiration Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Applied Date: activate to sort column ascending"
                                                        style="width: 63.1719px;">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Company: activate to sort column ascending"
                                                        style="width: 154.516px;">Featured</th>
                                                        
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Company: activate to sort column ascending"
                                                        style="width: 154.516px;">Clicks
</th>
                                                   
                                                    
                                                    
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Applications</th>
                                                        
                                                        
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;"> 
                                                        
                                                    Details
                                                        </th>
                                                    
                                                </tr>
                                            </thead>
								<tbody>
									        
                                                @foreach( $jobs as $job)
                                                        

                                                    <tr role="row" class="odd">
                                            <td class="sorting_1"><a class="btn btn-primary" href="{{url('/admin-view-job-detail/'.$job->job_id)}}">
                                                {{$job->job_id}}
                                                </a
                                                </td>
                                                        <td>{{$job->name}}</td>
                                                        <td>{{$job->title}}</td>
                                                        <td>{{$job->posting_Date}}</td>
                                                        <td>{{$job->futureDate}} </td>
                                                        <td>
                                                           @if($job->status == 0) 
                                                             {{ 'active' }}
                                                           @else
                                                           
                                                           {{'deactive'}}
                                                           @endif
                                                        <td>Featured</td>
                                                        <td>
                                                        <?php 
                                                        
                                                            $views = DB::table('views')->where('job_id',$job->job_id)->first();
                                                            echo $views->view; 
                                                            
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            $views = DB::table('job_applies')->where('jobpost_id',$job->job_id)->count();
                                                            
                                                            echo $views; 
                                                            ?>
                                                        </td>
                                                      <td>    <a class="btn btn-primary" href="{{url('/admin-view-job-detail/'.$job->job_id)}}">details </a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    // alert("cheetah bhai");
    $('#myTable').DataTable();
} );
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection


/
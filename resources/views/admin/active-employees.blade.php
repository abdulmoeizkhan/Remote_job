@extends('layout.admin')
@section('title','all-employee')
@section('content')
<div class="content-wrapper" style="min-height: 547px;">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-body p-0">
							<div class="table-responsive">
							  <div id="example2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div>
							  <div class="row"><div class="col-sm-12">
							      <table id="example2" class="table mb-0 w-p100 dataTable no-footer" role="grid" aria-describedby="example2_info">
									<thead>
									<tr role="row">
									    <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >ID </th>
									   <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Logo </th>
									   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Company Name</th>
									   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Screener Questions: activate to sort column ascending">Employee Name</th>
									   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending">Register Date</th>
									   <th  tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Active Jobs</th>
									   <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Interested?: activate to sort column ascending">Email</th>
									    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Interested?: activate to sort column ascending">Plan</th>
									     <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Interested?: activate to sort column ascending">Status</th>
									   
									   </tr>
								</thead>
								<tbody class="text-fade">
									@if($employees)
									@foreach($employees as $c=> $emp)
								    <tr role="row" class="odd">
								        <td ><a href="{{url('admin-employee-profile')}}/{{$emp->id}}" class="badge badge-success-light" style="cursor:pointer">
										    PK{{$emp->id}}
										</a></td>
									    <td><img src="{{asset('6.jpg')}}" height="30" class="align-self-center" alt=""></td>
										<td ><span >{{$emp->company_name}}</td>
										<td ><span class="badge badge-success-light" style="cursor:pointer">
										    {{$emp->firstname}} {{$emp->lastname}}
										</span></td>
										<td>{{$emp->created_at}}</td>
										<td>
										    {{ActiveJobs(60)}}
										</td>
										<td>
											<div class="btn-group">
											   <a href="#" class="badge badge-<?= isEmailVerified($emp->email)==1?'success':'primary';?>-light"> <?= isEmailVerified($emp->email)==1?'Verified':'Inactive';?><i class="fa fa-check"></i></a>
										</td>
										<td>
											<div class="btn-group">
											  <a href="#" class="badge badge-<?= $emp->status==1?'success':'primary';?>-light"><?= $emp->status==1?'Active':'Inactive';?><i class="fa fa-check"></i></a>
											</div>
										</td>
										<td>
											<div class="btn-group">
											  <a href="#" class="badge badge-<?= $emp->status==1?'success':'primary';?>-light"><?= $emp->status==1?'Active':'Inactive';?><i class="fa fa-check"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
									@endif
								
								</tbody>
							  </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
							</div>              
						</div>
					  </div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>  
@endsection
@extends('layout.admin')
@section('title','Affilly')
@section('content')
<div class="content-wrapper" style="min-height: 1091px;">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
				  <div class="box">
				      	@if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
					<div class="box-body">
					    <h4> All Seeker List </h4>
					    <span style="float:right;"> <a class="btn btn-success" href="{{url('seeker-paid-seeker')}}"> Paid Seekers </a></span>
					    
					</div>
				  </div>
				</div>
				<div class="col-12">
				  <div class="box">
					<div class="box-body">
						<div class="table-responsive">
						  <table class="table mb-0">
							  <thead class="thead-light">
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Name</th>
								  <th scope="col">Last Name</th>
								  <th scope="col">Email</th>
								  <th scope="col">Address</th>
								  <th scope="col">Country</th>
								  <th scope="col">State</th>
								  <th scope="col">City</th>
								  <th scope="col">Zip</th>
								  <th scope="col">Action</th>
								  
								</tr>
							  </thead>
							  
							  <tbody>
							      @foreach($seeker as $s)
								<tr>
								  <th scope="row">45871</th>
								  <td>{{@$s->firstname}}</td>
								  <td>{{@$s->lastname}}</td>
						        <td><a href="{{url('/admin-view-seeker-profile')}}/{{$s->id}}">{{@$s->email}}</a></td> 
								  <td>{{@$s->address}}</td>
								  <td>{{@$s->country_name}}</td>
								  <td>{{@$s->states_name}}</td>
								  <td>{{@$s->city}}</td> 
								  <td>{{@$s->zip}}</td>
								  
								  <td>
								        
								      @if($s->active_status == 0)
								          <a href="{{url('/seeker-active-status/'.$s->id.'/1')}}" type="button" class="btn btn-primary">Active</a>
								        @else
				
				    
								        <a href="{{url('/seeker-active-status/'.$s->id.'/0')}}" type="button" class="btn btn-danger">Deactive</a> 
				
								 @endif
								  </td>
								  <td>
								  </td>
								 
								</tr>
								@endforeach
							  </tbody>
							</table>
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
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
					    <h4> Paid Seeker List </h4>
					    <span style="float:right;"> <a class="btn btn-success" href="{{url('admin_view_seeker')}}"> All Seekers </a></span>
					    
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
								  <th scope="col">address</th>
								  <th scope="col">Action</th>
								  
								</tr>
							  </thead>
							  
							  <tbody>
							      @foreach($seeker as $s)
								<tr>
								  <th scope="row">45871</th>
								  <td>{{$s->firstname}}</td>
								  <td> {{$s->lastname}}</td>
								  <td> {{$s->email}}</td>
								  <td> {{$s->address}}</td>
								  <td> {{$s->city}}</td>
								  <td> {{$s->state}}</td>
								  <td> {{$s->zip}}</td>
								  
							
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
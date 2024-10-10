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
					<div class="box-body">
					    	<form class="form" action="{{url('admin-add-state')}}" method="post">
					    	    @csrf
							<div class="box-body">
							
								<hr class="my-15">
								<div class="row">
								@if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
								  <div class="col-md-5">
									<div class="form-group">
									  <label>Country  </label>
									  <select class="form-control" placeholder="First Name" name="country_id">
									      <option value="">Please select a country...</option>
                                                @foreach ($countries as $country) 
                                                <option value="{{$country->id}}">
                                                {{$country->name}}
                                                </option>
                                                @endforeach
									  </select>									  
									</div>
								  </div>
								  <div class="col-md-5">
									<div class="form-group">
									  <label>State  Name</label>
									  <input type="text" name="name" class="form-control" placeholder="Enter State name">
									</div>
								  </div>
								  <div class="col-md-2 " style="margin-top:15px">
									<button type="submit" class="btn  btn-primary btn-outline">
								  Save
								</button>
								  </div>
								</div>
								
							</div>  
						</form>
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
								  <th scope="col">Country</th>
								  <th scope="col">State</th>
								  <th scope="col">Edit</th>
								  <th scope="col">Delete</th>
								</tr>
							  </thead>
							  <tbody>
							      @foreach($states as $c)
								<tr>
								  <th scope="row">45871</th>
								  <td>{{$c->name}}</td>
								  <td>{{$c->coutry}}</td>
								  <td><a  href="{{url('/admin-edit-state')}}/{{$c->id}}" class="btn btn-primary">Edit</a></td>
								  <td><a  href="{{url('/admin-delete-state')}}/{{$c->id}}" class="btn btn-danger ">Delete</a></td>
								
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
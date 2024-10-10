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
					    	<form class="form" action="{{url('admin-sub_cat-state')}}" method="post">
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
                                                @foreach ($category as $cat) 
                                                <option value="{{$cat->id}}">
                                                {{$cat->name}}
                                                </option>
                                                @endforeach
									  </select>									  
									</div>
								  </div>
								  <div class="col-md-5">
									<div class="form-group">
									  <label>State  Name</label>
									  <input type="text" name="sub_category" class="form-control" placeholder="Enter sub category name">
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
								  <th scope="col">Category</th>
								  <th scope="col">sub category</th>
								  <th scope="col">Edit</th>
								  <th scope="col">Delete</th>
								</tr>
							  </thead>
							  <tbody>
							     @foreach($sub_cat as $sub)
							 	<tr>
								 
								  <th scope="row">45871</th>
								  <td>{{$sub->name}}</td>
								  <td>{{$sub->sub_category}}</td>
								    <td><a  href="{{url('/admin-edit-sub_category')}}/{{$sub->id}}" class="btn btn-primary">Edit</a></td>
								  <td><a  href="{{url('/admin-delete-sub_category')}}/{{$sub->id}}" class="btn btn-danger ">Delete</a></td>
								
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
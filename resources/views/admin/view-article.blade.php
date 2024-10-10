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
								  <th scope="col">title</th>
								  <th scope="col">content</th>
								  <th scope="col">Edit</th>
								  <th scope="col">Delete</th>
								</tr>
							  </thead>
							  <tbody>
							      @foreach($articles as $a)
								<tr>
								  <th scope="row">45871</th>
								  <td>{{$a->title}}</td>
								  <td> {{$a->content}}</td>
								  <td><a  href="{{url('/admin-edit-article')}}/{{$a->id}}" class="btn btn-primary">Edit</a></td>
								  <td><a  href="{{url('/admin-delete-article')}}/{{$a->id}}" class="btn btn-danger ">Delete</a></td>
								
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
@extends('layout.admin')
@section('title','Affilly')
@section('content')
<div class="content-wrapper" style="min-height: 1091px;">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-8 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Package</h4>
						</div>
						<!-- /.box-header -->
						<form action="{{url('admin-store-package')}}" method="post">
						    @csrf
							<div class="box-body">
								<div class="form-group">
									<label> Name:</label>
									<input type="text" name="name" class="form-control" placeholder="Enter package name">
								</div>
								<div class="form-group">
									<label>Jobs:</label>
									<input type="number" name="jobs" class="form-control" placeholder="Enter job posting limits">
								</div>
								<div class="form-group">
									<label>Jobs: <small>put 0 for unlimited</small></label>
									<input type="number" name="cv" class="form-control" placeholder="Enter cv limits">
								</div>
								<div class="form-group">
									<label>Time Duration:</label>
									<select  name="duration" class="form-control">
									    <option value="30">Monthly</option>
									    <option value="365">Yearly</option>
									</select>
								</div>
									<div class="form-group">
									<label>Price:</label>
									<input type="number" name="price" class="form-control" placeholder="Enter package price ">
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-center">
								<button type="submit" class="btn btn-rounded btn-success ">Submit</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->			
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  @endsection
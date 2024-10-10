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
				<div class="box-header with-border">
				    @if (Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
				  <h4 class="box-title">{{@$heading}}</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <form role="form" method="POST" action="{{url('update_privacy_policy')}}">
				    @csrf
					<!-- textarea --> 
					<div class="form-group">
					  <label class="form-label">Content</label>
					  <textarea class="form-control" rows="3" name="content" placeholder="Enter ...">{{@$privacy_policy->content}}</textarea>
					</div>
                    <input type="submit" class="btn btn-primary" value="Update"> 
				  </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!--/.col (right) -->
		  </div>
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>  
@endsection
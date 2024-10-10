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
				  <form role="form" method="POST" action="{{url('update_website_email')}}">
				    @csrf
                        <div class="form-group">
							<label class="form-label">Order confirmation</label>
							<input type="email" name="order_email" class="form-control" value="{{@$email->account_status_email}}" placeholder="Text input" fdprocessedid="qj7yo" required>
						</div>
						<div class="form-group">
							<label class="form-label">Contact</label>
							<input type="email" name="contact_email" class="form-control" value="{{@$email->contact_email}}" placeholder="Text input" fdprocessedid="qj7yo" required>
						</div>
						<div class="form-group">
							<label class="form-label">Account Status</label>
							<input type="email" name="account_email" class="form-control" value="{{@$email->account_status_email}}" placeholder="Text input" fdprocessedid="qj7yo" required>
						</div>
						<div class="form-group">
							<label class="form-label">Support</label>
							<input type="email" name="support_email" class="form-control" value="{{@$email->support_email}}" placeholder="Text input" fdprocessedid="qj7yo" required>
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
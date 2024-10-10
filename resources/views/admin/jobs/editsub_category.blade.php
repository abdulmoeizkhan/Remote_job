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
					    	<form class="form" action="{{url('admin-sub_cat-updatesub_category')}}" method="post">
					    	    @csrf
							<div class="box-body">
							
								<hr class="my-15">
								<div class="row">
							
								  <div class="col-md-5">
								      	<input type="hidden" name="subcat_id" value="{{ $sub_cat[0]->id }}">
									<div class="form-group">
									  <label>Country  </label>
									  <select class="form-control" placeholder="First Name" name="category_id">
									      <option value="">Please select a category...</option>
                                              
                                               @foreach ($category as $cat)															 
                                                                <option value="{{ $cat->id }}" {{ $cat->id == $sub_cat[0]->category_id ? 'selected' : '' }}> {{ $cat->name }}</option>
                                                            @endforeach
                                                
									  </select>									  
									</div>
								  </div>
								  <div class="col-md-5">
								      
									<div class="form-group">
									  <label>State  Name</label>
									  <input type="text" name="sub_category" value="{{ $sub_cat[0]->sub_category }}" class="form-control" placeholder="Enter sub category name">
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
						
					</div>
				  </div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  @endsection
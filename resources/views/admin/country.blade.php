@extends('layout.admin')
@section('title','Affilly')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="content-wrapper" style="min-height: 1091px;">
	           	<div class="col-12">
		<div class="box">
		  <div class="box-body">
				  <form class="form" action="{{url('admin-add-job-category')}}" method="post">
					  @csrf
				  <div class="box-body">
				  
					 <h1>Admin Job Type</h1> 
					  
				  </div>  
			 
		  </div>
		</div>
	  </div>
	  <div class="container-full">
	      
		<!-- Main content -->
		<section class="content">
		    
			<div class="row">
				@if (Session::has('success'))
				<div class="alert alert-success">{{ Session::get('success') }}</div>
				@endif
				<div class="col-12">
				  <div class="box">
					<div class="box-body">
					    	<form class="form" action="{{url('admin-add-country')}}" method="post">
					    	    @csrf
							<div class="box-body">
							
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-8">
									<div class="form-group">
									  <label>Enter Country  Name</label>
									  <input type="text" class="form-control" name="name" required placeholder="Country name">
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
								  <th scope="col">Edit</th>
								  <th scope="col">delete</th>
								</tr>
							  </thead>
							  <tbody>
							      @foreach($countries as $no=> $c)
								<tr>
								  <th scope="row">{{++$no}}</th>
								  <td>{{$c->name}}</td>
								  <input type="hidden" value="{{$c->name}}" id="name_{{$c->id}}">
								 
								  <td> <button type="button"  class="btn btn-primary" onclick="edit({{ $c->id }})">Edit</button></td>
								  <td><a  href="{{url('/admin-delete-country')}}/{{$c->id}}" class="btn btn-danger ">Delete</a></td>
						
								</tr>
								@endforeach
							  </tbody>
						
							  {{-- {{ $c->links() }} --}}
							</table>
							{{-- {!! $countries->appends(['sort' => 'votes'])->links() !!} --}}
						</div>
					</div>
				  </div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
		  <button type="button" class="close" onclick="closebtn()" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form method="post" action="{{url('admin-update-country')}}"> 
		  <input type="hidden" name='id' id="id_country">
		  <input class="form-control" type="text" name='name' id="edit_country">
		  
			@csrf
		   
		</div>
		<div class="modal-footer">
		  <button type="button" onclick="closebtn()" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary">Save changes</button>
		</div>    
		 </form>
	  </div>
	</div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

	function edit(id){
		  var name = $('#name_'+id).val();
		  $('.modal').modal('show');
	    // alert(name);
			  $('#edit_country').val(name); 
			  $('#id_country').val(id); 
	}

	function closebtn() {
            //  alert("");
            $('.modal').modal('hide');
			}
      
	
	
</script>

  @endsection
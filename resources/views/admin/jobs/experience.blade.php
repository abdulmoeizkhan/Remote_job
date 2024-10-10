@extends('layout.admin')
@section('title','Affilly')
@section('content')
<div class="content-wrapper" style="min-height: 1091px;">
    	<div class="col-12">
	   	  <div class="box">
		    <div class="box-body">
			 <form class="form" action="{{url('admin-add-job-experience')}}" method="post">
					  @csrf
			  <div class="box-body">
				  
					 <h1>Admin Job Experience</h1> 
					  
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
					    	<form class="form" action="{{url('admin-add-job-experience')}}" method="post">
					    	    @csrf
							<div class="box-body">
							
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-5">
									<div class="form-group">
									  <label>Minimum Job Experience  </label>
									  <input type="number" class="form-control" Required name="min_exp"  placeholder="job experience ">
									</div>
								  </div>
								  <div class="col-md-5">
									<div class="form-group">
									  <label>Max Job Experience  </label>
									  <input type="number" class="form-control" Required name="max_exp"  placeholder="job experience ">
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
								  <th scope="col">Edit</th>
								  <th scope="col">Delete</th>
								</tr>
							  </thead>
							  <tbody>
							      @if($experience)
							      @foreach($experience as $e)
								<tr>    
								  <th scope="row">{{$e->id}}</th>
								  <td>{{$e->min_exp}} years -{{$e->max_exp}} years</td>
								  

								 	  <input type="hidden"  value="{{$e->min_exp}}" id="min_exp_{{$e->id}}">
								 	  <input type="hidden" value="{{$e->max_exp}}" id="max_exp_{{$e->id}}">
							
								  <td> <button type="button"  class="btn btn-primary" onclick="edit({{ $e->id }})">Edit</button></td>
                                  <td><a  href="{{url('/admin-delete-experience')}}/{{$e->id}}" class="btn btn-danger ">Delete</a></td>
								
								</tr>
								@endforeach
								@endif
							  </tbody>
							</table>
						</div>
					</div>
				  </div>
				</div>
			</div>
			<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" id="closemodal" onclick="closebtn()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="{{url('admin-update-job-experience')}}"> 
        
        <input type="hidden" name='id'  id="id_exp">
        <label for="exampleFormControlInput1">Minimum Job Experience</label>
        <input class="form-control" Required type="number" name='min_exp' id="edit_min_exp">
<br>
       <label for="exampleFormControlInput1">Maximum Job Experience</label>
       <input class="form-control" Required type="number" name='max_exp' id="edit_max_exp">
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
		</section>
		<!-- /.content -->
	  </div>
  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  
  <script>  
  function edit(id){
      var name1 = $('#min_exp_'+id).val();
      var name2 = $('#max_exp_'+id).val();
      $('.modal').modal('show');
      $('#edit_min_exp').val(name1);
      $('#edit_max_exp').val(name2);
      $('#id_exp').val(id);
    //   alert("data :"+name1+name2);
     
      
  }
  
  
     function closebtn(){
        //  alert("");
        $('.modal').modal('hide');
     }
  </script>
  @endsection
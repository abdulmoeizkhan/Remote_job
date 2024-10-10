@extends('layout.admin')
@section('title', 'Affilly')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="content-wrapper" style="min-height: 1091px;">
         
        <div class="container-full">
       
            <!-- Main content -->
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
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <form class="form" action="{{ url('admin-add-job-type') }}" method="post">
                                    @csrf
                                    <div class="box-body">
                                        <hr class="my-15">
                                        <div class="row">
                                            
                                            
                                            			    @if (Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Enter Job Type </label>
                                                    <input type="text" class="form-control" name="type" required
                                                        placeholder="job category name">
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
                                            @if($types)
                                                @foreach ($types as $no => $t)
                                                    <tr>
                                                        <th scope="row">{{++$no}}</th>
                                                        <td>{{ $t->type }}</td>
                                                        <input type="hidden" value="{{ $t->type }}" id="type_{{ $t->id }}">
                                                        <td>
                                                            <button type="button" class="btn btn-primary" onclick="edit({{ $t->id }})">Edit</button>
                                                        </td>

                                                        <td><a href="{{url('/admin-delete-type')}}/{{$t->id}}" class="btn btn-danger ">Delete</a></td>
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
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" onclick="closebtn()" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ url('/admin-update-jobtype') }}">
                                    @csrf
                                    <input type="hidden" name='id' id="id_type">
                                    <input class="form-control" type="text" name='type' id="edit_type">


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="closebtn()"
                                    data-dismiss="modal">Close</button>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        function edit(id) {
            var name = $('#type_' + id).val();
            $('.modal').modal('show');
            //   alert(name);
            $('#edit_type').val(name);
            $('#id_type').val(id);

        }

        function closebtn(){
            //  alert("");
            $('.modal').modal('hide');
        }
    </script>
@endsection

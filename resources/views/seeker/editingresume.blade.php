@extends('layout.seeker')
@section('title', 'Affilly')
@section('content')
    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
             
                <div class="row">

                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                               <div class="col-12">
				  <div class="box">
				      <form action="{{url('update-resume')}}" method="post" enctype="multipart/form-data">
				          @csrf
				          
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">Edit Resume</h4>
					  		<input type="file" class="form-control-file" name="resume" id="exampleFormControlFile1">
							<input type="submit" class="btn btn-primary" value="Update">
							
						</div>
					</form>
					</div>
				  </div>
				</div>
                                <div class="table-responsive">
<div class="col-sm-12">

      </div>


                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
    </div>
@endsection



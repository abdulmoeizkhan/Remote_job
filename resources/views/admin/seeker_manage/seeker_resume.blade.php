@extends('layout.admin')
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
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">Seeker Resume</h4>
							<a href="{{url('/admin-view-seeker-profile/'.$seekers->id)}}" class="btn btn-primary">back</a>
						</div>
					</div>
				  </div>
				</div>
                                <div class="table-responsive">
<div class="col-sm-12">

                                                    <embed src="{{asset( 'uploads/seeker/resume/'.$seekers->my_resume)}}" type="application/pdf" width="100%" height="600px" />
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



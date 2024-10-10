@extends('layout.employer')
@section('title', 'Affilly')
@section('content')
    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
             <div class="col-12">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">{{@$heading}}</h4>
 
							<!--<a href="#" class="btn btn-primary"><i class="fa fa-download"></i>Get Statement</a>-->
						</div>
					</div>
				  </div>
				</div>
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
					  	        <a href="{{asset( 'uploads/seeker/resume/'.$seeker_data->my_resume)}}" class="btn btn-primary mb-5 mt-3"
					  	        download="{{asset( 'uploads/seeker/resume/'.$seeker_data->my_resume)}}">Download Resume</a>

					  		 <input type="range" min="1" max="5" value="2"  id="myRange" style="float: right">
					  		   <p style="float: right">Rating: <span id="demo"></span></p>
                                
                                <div class="table-responsive">
<div class="col-sm-12">
    
                                                    <embed src="{{asset( 'uploads/seeker/resume/'.$seeker_data->my_resume)}}" type="application/pdf" width="100%" height="600px" />
    
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
    <script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
@endsection
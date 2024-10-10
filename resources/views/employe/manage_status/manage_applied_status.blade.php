@extends('layout.employer')
@section('title', 'Affilly')
@section('content')
    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
             
                <div class="row">
                    @if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
       @if(Session::has('danger'))
<p class="alert alert-danger">{{ Session::get('danger') }}</p>
@endif
<div class="col-12">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">{{@$heading}}</h4>
							<a href="{{ url('employe_applicant_tracking') }}" class="btn btn-primary">Action</a>
						</div>
					</div>
				  </div>
				</div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
<div class="col-sm-12"><table  class="table table-striped table-bordered display " style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                              <thead>
                                                <tr role="row">
                                                         <th >Status</th>
                                                         <th >Current Status</th>
                                                         <th >Last Updated Date</th>
                                                         <th >Update</th>
                                                         <th >Action</th>                                                         
                                                </tr>
                                            </thead>
								<tbody>

								    @foreach($seeker_job_app_status as $item)
                                    <form method="POST" action="{{ url('update_job_status') }}">
                                        <input type="hidden" name="job_id" value="{{$job_id}}">
                                        <input type="hidden" name="seeker_id" value="{{$seeker_id}}">
                                        <input type="hidden" name="option_status_id" value="{{$item->id}}">

            
                                        @csrf
                                                    <tr role="row" class="odd">
                                                        
                                                        <td>{{$item->name}}</td>
                                                       <td><?php
                                                        $status_name = DB::table('apply_status_option')->where('id',$item->option_id)->first();
                                                        echo  $item->name.'/'.$status_name->option_name;    
                                                       ?></td>
                                                        <td>{{$item->date}}</td>
                                                       <td><select name="option" required>
                                                        <!--<option value="" selected>Select</option>-->
                                                        <!--   @foreach($apply_status_option as $options)-->
                                                        <!--<option value="{{ $options->id }}"> {{ $options->option_name }}</option>-->
                                                           
                                                           
                                                        <!--    @endforeach-->


                                                           
                                                           @foreach($apply_status_option as $options)
<option value="{{ $options->id }}" {{ $options->id == $item->option_id ? 'selected' : '' }}> {{ $options->option_name }}</option>
                                                           
                                                           
                                                            @endforeach
                                                       </select></td>
                                                       <td><input type="submit" value="Update"></td>
                                                    </tr>
                                    </form>
                                    @endforeach
									</tbody>
							
							</table></div>


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
	<!--<script src="{{asset('vendor_components/datatable/datatables.min.js')}}"></script>-->
	<!--<script src="{{asset('vendor_components/datatable/datatable.js')}}"></script>-->


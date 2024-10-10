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
					  		<h4 class="box-title mb-md-0 mb-20">Job Applicants</h4>
							<!--<a href="#" class="btn btn-primary"><i class="fa fa-download"></i>Get Statement</a>-->
						</div>
					</div>
				  </div>
				</div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
<div class="col-sm-12"><table id="example6" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                              <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="#ID: activate to sort column descending"
                                                        style="width: 34.4062px;">#ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 154.4922px;">plane name</th>
                                                         
                                                   
                                                
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Applied Date: activate to sort column ascending"
                                                        style="width: 63.1719px;">Buy date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Company: activate to sort column ascending"
                                                        style="width: 154.516px;">Expiring Date</th>
                                                   
                                                    
                                                    
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Status</th>
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Save Resume</th>
                                                </tr>
                                            </thead>
								<tbody>
								           
								    	    @foreach($subscription as $sub)
									 
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"></td>
                                                        <td></td>
                                                        <td>xxx</td>
                                                        <td></td>
                                                        <td></td>
                                                       
                                                         
                                                         
                                                        
                                                        
                                                        <td>
                                                    
                                                        </td>
                                                        
                                                    </tr>
                                              
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



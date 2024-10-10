@extends('layout.employer')
@section('title', 'Affilly')
@section('content')
    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
             
                <div class="row">
                    <div class="col-12">
				  <div class="box">
				      {{@$heading}}
					<div class="box-body">
                        <form action="{{ url('employe_resume_search') }}" method="post">
                            @csrf
					    <div class="row">
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">Keyword</label>
                                <input type="text" class="form-control mt-2" name="keyword" value="{{@$keyword}}" placeholder="Enter Keyword">
                              </div>
					        </div>
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">First Name</label>
                                <input type="text" class="form-control mt-2" name="first_name" value="{{@$first_name}}" id="exampleFormControlInput1" placeholder="First Name">
                              </div>
					        </div>
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">Last Name</label>
                                <input type="text" class="form-control mt-2" name="last_name" value="{{@$last_name}}" placeholder="Last Name">
                              </div>
					        </div>	
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" name="email" class="form-control mt-2" value="{{@$email}}" placeholder="name@example.com">
                              </div>
					        </div>	
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">Country</label>
                                <select class="form-control mt-2" name="country">
                                    <option value=' ' selected>Select Country</option>
                                    @foreach($all_country as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                <!--<input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="name@example.com">-->
                              </div>
					        </div>
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">Zip Code</label>
                                <input type="number" name="zip_code" class="form-control mt-2" value="{{@$zip_code}}" placeholder="Enter Zip Code">
                              </div>
					        </div>
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">Category</label>
                                <select class="form-control mt-2" name="category">
                                    <option value=' ' selected>Select Category</option>
                                    @foreach($all_category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                                <!--<input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="name@example.com">-->
                              </div>
					        </div>
					        <div class="col-3">
					             <div class="form-group">
                                <label for="exampleFormControlInput1">Experience</label>
                                <input type="number" name="experience" class="form-control mt-2" value="{{@$experience}}" placeholder="Enter Experience">
                              </div>
					        </div>
	                        <div class="col-3">
					        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="save_search" value="1" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Save Search
                          </label>
                        </div>
                        </div>
                        
                        	<div class="col-3">
					             <div class="form-group">
                                <input type="submit" class="btn btn-primary mt-2" value="Search">
                              </div>
					        </div>
                        
					    </div>
                    </form>
				  </div>
				</div>
                    
                    @if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
                                
                                <div class="col-sm-12">
                                <table id="example6" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                              <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="#ID: activate to sort column descending"
                                                        style="width: 34.4062px;">#ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 47.4922px;">Email</th>
                                                        

                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Applied Date: activate to sort column ascending"
                                                        style="width: 63.1719px;">First Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Company: activate to sort column ascending"
                                                        style="width: 154.516px;">Last Name</th>
                                                   
                                                    
                                                    
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Country</th>
                                                       
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Zip Code</th>
                                                        <!--     <th class="sorting" tabindex="0" aria-controls="example"-->
                                                        <!--rowspan="1" colspan="1"-->
                                                        <!--aria-label="Status: activate to sort column ascending"-->
                                                        <!--style="width: 49.1172px;">Job Type</th>-->
                                                             <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending"
                                                        style="width: 49.1172px;">Category</th>
                                                        
                                                        <!-- <th class="sorting" tabindex="0" aria-controls="example"-->
                                                        <!--rowspan="1" colspan="1"-->
                                                        <!--aria-label="Status: activate to sort column ascending"-->
                                                        <!--style="width: 49.1172px;">Experience</th>-->

                                                        <!-- <th class="sorting" tabindex="0" aria-controls="example"-->
                                                        <!--rowspan="1" colspan="1"-->
                                                        <!--aria-label="Status: activate to sort column ascending"-->
                                                        <!--style="width: 49.1172px;">Detail</th>-->
                                                        
                                                </tr>
                                            </thead>
								<tbody>

									    @foreach ($all_seeker as $key => $seeker)
                                                
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{++$key}}</td>
                                                        <td>{{$seeker->email}}</td>
                                                        <td>{{$seeker->firstname}}</td>
                                                        <td>{{$seeker->lastname}}</td>
                                                        
                                                        <td><?php
                                                        if($seeker->country!=null){
                                                            $country =  DB::table('countries')->where('id',$seeker->country)->first();
                                                            echo $country->name; 
                                                        }else{
                                                            echo '';
                                                        }
                                                        ?></td>
                                                        
                                                        <td>{{$seeker->zip}}</td>
                                                        <td>{{$seeker->name}}</td>
                                                    </tr>
                                                @endforeach
									
									</tbody>
							
							</table>    
                                    
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
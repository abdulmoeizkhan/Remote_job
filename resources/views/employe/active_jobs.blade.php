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
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div id="example_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                         <div class="dt-buttons btn-group">
                                            <button class="btn  buttons-csv buttons-html5" tabindex="0"
                                                aria-controls="example" fdprocessedid="5xml9v"><span>Active Jobs</span></button>
                                            
                                        </div> 

                                        <table id="example" class="table mb-0 w-p100 dataTable no-footer" role="grid"
                                            aria-describedby="example_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="#ID: activate to sort column descending"
                                                        style="width: 34.4062px;">#ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 47.4922px;">Title</th>
                                                         <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 36.1719px;">Job Type</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 36.1719px;">Job Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Applied Date: activate to sort column ascending"
                                                        style="width: 63.1719px;">Posted Date</th>
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
                                                        style="width: 49.1172px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>








                                                @foreach ($jobs as $c=> $job)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{++$c}}</td>
                                                        <td>{{$job->title}}</td>
                                                        <td>{{JobType($job->job_type)}}</td>
                                                        <td>{{JobCategory($job->job_category)}}</td>
                                                        <td>{{$job->posting_Date}}</td>
                                                         <td>{{$job->expiry_Date}}</td>
                                                         
                                                        <td><span class="badge <?= $job->status==1?"badge-success-light":"badge-danger-light"?> "><?= $job->status==1?"Active":"Expire"?></span></td>
                                                        
                                                        
                                                        <td>
                                                            <div class="d-flex align-items-center gap-items-2">
                                                                <a href="#"
                                                                    class="waves-effect waves-circle btn btn-circle btn-success btn-xs"><i
                                                                        class="mdi mdi-phone"></i></a>
                                                                <a href="#"
                                                                    class="waves-effect waves-circle btn btn-circle btn-warning btn-xs"><i
                                                                        class="mdi mdi-email"></i></a>
                                                            </div>
                                                        </td>
                                                        
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

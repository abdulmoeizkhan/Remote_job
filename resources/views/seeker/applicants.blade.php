@extends('layout.seeker')
@section('title', 'Affilly')
@section('content')

    <div class="content-wrapper" style="min-height: 214px;">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
             
                <div class="row">
                    <div class="col-12">
                        <div class="box-body">
                            <div class="table-responsive">
                              <div id="example5_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example5_length"><label>Show <select name="example5_length" aria-controls="example5" class="form-control form-control-sm" fdprocessedid="k7pg1b"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example5"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example5" class="table table-bordered table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="example5_info">
                                <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 199px;">Job Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 212px;">Company Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 199px;">Job inserted</th>
                                        <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 199px;">Applied on</th>
                                        <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 199px;">Delete</th>
                                </thead>
                                <tbody>
                                    <h1>My Applicants</h1>
                                <tr role="row" class="odd">
                                        <td class="sorting_1">Job Title</td>
                                        <td>Company Name</td>
                                        <td>Job inserted</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                    </tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1"><input type="text" placeholder="Search Name" fdprocessedid="n5j7da"></th>
                                        <th rowspan="1" colspan="1"><input type="text" placeholder="Search Position" fdprocessedid="4dfaju"></th>
                                        <th rowspan="1" colspan="1"><input type="text" placeholder="Search Office" fdprocessedid="w85x77"></th>
                                        <th rowspan="1" colspan="1"><input type="text" placeholder="Search Age" fdprocessedid="zhkqxl"></th>
                                        <th rowspan="1" colspan="1"><input type="text" placeholder="Search Start date" fdprocessedid="bzvdgq"></th>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example5_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example5_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example5_previous"><a href="#" aria-controls="example5" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example5" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example5" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example5" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example5" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example5" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example5" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example5_next"><a href="#" aria-controls="example5" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
    </div>

@endsection

@extends('layout.seeker')
@section('title','Affilly')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
			
				<!--<div class="col-xl-3 col-lg-4 col-12">-->
				<!--	<div class="box">-->
				<!--		<div class="box-header">-->
				<!--			<h3 class="box-title fw-500">JOBS IN</h3>-->
				<!--			<p class="subtitle mb-0">Singapore,Southern Malaysia </p>-->
				<!--		</div>-->
				<!--		<div class="box-body">-->
				<!--			<div class="d-flex align-items-center mb-10">-->
				<!--				<div class="me-15 h-40 w-40 l-h-40 rounded10 text-center bg-secondary-light">-->
				<!--					  <img src="{{asset('images/icon/sort.png')}}" alt="" />-->
				<!--				</div>-->
				<!--				<div class="d-flex flex-column fw-500">-->
				<!--					<h4 class="mb-1 mb-0">Sort by :</h4>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="mb-40 ms-55">-->
				<!--				<a href="#" class="fs-16">Relevance - <span class="text-primary">date</span></a>-->
				<!--			</div>-->
				<!--			<div class="d-flex align-items-center mb-10">-->
				<!--				<div class="me-15 h-40 w-40 l-h-40 rounded10 text-center bg-secondary-light">-->
				<!--					  <img src="{{asset('images/icon/Group2.png')}}" alt="" />-->
				<!--				</div>-->
				<!--				<div class="d-flex flex-column fw-500">-->
				<!--					<h4 class="mb-1 mb-0">Distance :</h4>-->
				<!--					<p class="fs-12 mb-0">Exact Location Only</p>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="mb-40 ms-55">-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Within 5 kilometers</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Within 10 kilometers</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Within 15 kilometers</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Within 20 kilometers</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Within 25 kilometers</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Within 30 kilometers</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Within 35 kilometers</a>-->
				<!--			</div>-->
				<!--			<div class="d-flex align-items-center mb-10">-->
				<!--				<div class="me-15 h-40 w-40 l-h-40 rounded10 text-center bg-secondary-light">-->
				<!--					  <img src="{{asset('images/icon/Group1.png')}}" alt="" />-->
				<!--				</div>-->
				<!--				<div class="d-flex flex-column fw-500">-->
				<!--					<h4 class="mb-1 mb-0">Salary Estimate</h4>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="mb-40 ms-55">-->
				<!--				<a href="#" class="fs-16 d-block mb-10">$ 1,28,000+  (4)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">$ 2,23,800+  (4)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">$ 3,23,800+  (4)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">$ 6,23,600+  (3)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">$ 7,23,800+  (2)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">$ 8,23,600+  (2)</a>-->
				<!--			</div>-->
				<!--			<div class="d-flex align-items-center mb-10">-->
				<!--				<div class="me-15 h-40 w-40 l-h-40 rounded10 text-center bg-secondary-light">-->
				<!--					  <img src="{{asset('images/icon/Group3.png')}}" alt="" />-->
				<!--				</div>-->
				<!--				<div class="d-flex flex-column fw-500">-->
				<!--					<h4 class="mb-1 mb-0">Job Type</h4>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="mb-40 ms-55">-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Full- Time  (4)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Internship  (3)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Fresher  (2)</a>-->
				<!--				<a href="#" class="fs-16 d-block mb-10">Freelancer  (2)</a>-->
				<!--			</div>-->
				<!--			<div class="d-flex align-items-center mb-10">-->
				<!--				<div class="me-15 h-40 w-40 l-h-40 rounded10 text-center bg-secondary-light">-->
				<!--					  <img src="{{asset('images/icon/Group4.png')}}" alt="" />-->
				<!--				</div>-->
				<!--				<div class="d-flex flex-column fw-500">-->
				<!--					<h4 class="mb-1 mb-0">Location</h4>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--			<div class="ms-55">-->
				<!--				<a href="#" class="fs-16 d-block">Node Developer Jobs<br> Nationwide</a>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
				<div class="col-xl-8 col-lg-12 col-12">
					<div class="box">
						<div class="box-body">
							<div class="row justify-content-center">
							  <div class="col-md-6">
								<div class="form-group">
								  <label class="form-label d-block fw-500 fs-16">What</label>
								  <label class="text-fade form-label" style="width:100%">Title or company</label>
								  <div class="form-group position-relative">
									<input type="text" class="form-control input-lg h-40" placeholder="Search by job or company">
									<span class="position-absolute r-18 t-10"></span> 
								  </div>
								</div>
							  </div>
							  <div class="col-md-6">
								<div class="form-group">
								  <label class="form-label d-block fw-500 fs-16">Where</label>
								  <label class="text-fade form-label">city or state</label>
								  <div class="form-group position-relative">
									<input type="text" class="form-control input-lg h-40" placeholder="Miami,Tampa... ">
									<span class="position-absolute r-18 t-10"> </span> 
								  </div>
								</div>
							  </div>
								<div class="col-md-6 col-12">
									<div class="text-center">
										<button type="button" class="w-p100 waves-effect waves-light btn btn-primary">Find Jobs</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<div class="bg-light p-10 d-lg-flex justify-content-between align-items-center rounded">
								<p class="mb-lg-0 mb-20">Showing 1 to 5 of 13</p>
								<div class="d-flex justify-lg-content-end align-items-center">
									<select class="form-select w-100">
										<option selected>Sort By...</option>
										<option value="1">New</option>
										<option value="2">Top Rated</option>
										<option value="3">Populer</option>
									</select>
									<ul class="nav nav-pills" id="pills-tab" role="tablist">
									  <li class="nav-item mx-5" role="presentation">
										  <a class="nav-link b-0 fs-18" id="pills-grid-tab" data-bs-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="false">
											<i class="fa fa-th me-0"></i>
										  </a>
									  </li>
									  <li class="nav-item mx-5" role="presentation">
										  <a class="nav-link active b-0 fs-18" id="pills-list-tab" data-bs-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="true">
											<i class="fa fa-list me-0"></i>
										  </a>
									  </li>
									</ul>								
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
						    
						    @foreach($jobs as $job)
						    
						  
							<div class="box pull-up">
								<div class="box-body">
									<div class="d-md-flex align-items-center">
										<div class="mx-15">
											<img src="{{asset('images/logo/logo-1.jpg')}}" class="img-fluid max-w-80" alt="" />
										</div>
										<div class="d-flex w-p100 d-block justify-content-between align-items-center">
											<div>
												<h4 class="mb-0 fw-500">{{$job->company_name}}</h4>
												<p class="my-5 fs-16 text-fade">{{$job->title}}</p>
												<p class="mb-0 fs-12 text-fade"> {{$job->posting_Date}} <span class="mx-15">|</span>6 Applied</p>
											</div>
											<div class="text-md-right">
												<p class="mb-40">{{$job->cc}}</p>
												<a href="{{ url('jobDetail') }}/{{$job->id }}" class="text-primary">VIEW DETAILS</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							@endforeach
						</div>
						<div class="tab-pane fade" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
							<div class="row">
							    @foreach($jobs as $job )
								<div class="col-md-6 col-12">									
									<div class="box pull-up">
										<div class="box-body">
											<div class="mb-10 text-center">
												<div class="mb-15">
													<img src="{{asset('images/logo/logo-1.jpg')}}" class="img-fluid max-w-50" alt="" />
												</div>
												<div>
													<h4 class="mb-0 fw-500">{{$job->company_name}}</h4>
													<p class="my-5 fs-16 text-fade">{{$job->title}}</p>
													<p class="mb-15 fs-12 text-fade">  <span class="mx-15"> <strong>Posted on:</strong> </span>{{$job->posting_Date}}</p>
													<p class="mb-0">{{$job->cc}}</p>
												</div>
											</div>
											<div class="text-center">
												<a href="#" class="text-primary fs-12">VIEW DETAILS</a>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							
							</div>
						</div>
					</div>
					<div aria-label="Page navigation example">
					  <ul class="pagination mb-30 mb-xl-0">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					  </ul>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-body px-xxxl-5">
							<div class="text-center">
								<img src="{{asset('images/logo/logo-2.jpg')}}" class="img-fluid max-w-150 mb-15 mt-30" alt="" />
								<h3 class="mb-40 fw-500">Monek Ltd</h3>
								<div class="mb-40">
									<h5 class="fw-500">Full Stack Developer</h5>
									<p class="text-fade mb-0">Monek Ltd - Miami, FL. USA </p>
								</div>
								<div class="mb-40">
									<h5 class="fw-500">Job Summary</h5>
									<p class="text-fade mb-0">ABC LLC. is looking for the<br> Project Manager ( 1 years to 5 years)<br> of experience with good logical skills: </p>
								</div>
								<div class="mb-40">
									<h5 class="fw-500">Skill Sets Required</h5>
									<p class="text-fade mb-10">Front end : Angular JS, HTML, CSS</p>
									<p class="text-fade mb-0">Back end : Node JS,SQL, SQL LITE </p>
								</div>
								<div class="mb-40">
									<h5 class="fw-500">Venue</h5>
									<p class="text-fade mb-0">Lorem Ipsum, B - 42, 3rd floor,<br> Sector - 15, Dummy - 12458<br>(Downtown, Northern Drive) </p>
								</div>
								<div class="mb-40">
									<h5 class="fw-500">Contact</h5>
									<p class="text-fade mb-10"> +1- 878-400-1234 , +1-212-123-1234</p>
									<p class="text-fade mb-10"> info@abcllc.com | support@abcllc.com</p>
									<p class="text-fade mb-0"> Walk-in Time : 12 Noon to 3 PM (Monday-Friday)</p>
								</div>
								<div class="mb-20">
									<button type="button" class="w-p100 waves-effect waves-light btn btn-primary">APPLY NOW</button>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-body py-0">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<h5 class="text-fade">Shortlisted</h5>
									<h2 class="fw-500 mb-0">10.9k</h2>
								</div>
								<div>
									<div id="revenue2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  @endsection
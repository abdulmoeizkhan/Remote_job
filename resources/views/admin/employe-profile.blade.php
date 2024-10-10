@extends('layout.admin')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<div class="content-wrapper" style="min-height: 566.5px;">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Profile</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Extra</li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-5 col-lg-5">
					<div class="card text-center">
						<div class="card-body">
							<img src="{{asset('6.jpg')}}" class="bg-light w-100 h-100 rounded-circle avatar-lg img-thumbnail" alt="profile-image">

							<h4 class="mb-0 mt-2"></h4>
							<!--<p class="text-muted fs-14">Project Manager</p>-->

				

							<div class="text-start mt-3">
								<p class="header-title text-info mb-2"><strong>About Me :</strong></p>
								<p class="text-muted  mb-3">
								
								</p>
								<p class="text-muted mb-2 "><strong class="text-info">Full Name :</strong> <span class="ms-2">{{$company->firstname." ".$company->lastname}}</span></p>

								<p class="text-muted mb-2 "><strong class="text-info">Mobile :</strong><span class="ms-2">{{$company->phone}}</span></p>

								<p class="text-muted mb-2 "><strong class="text-info">Email :</strong> <span class="ms-2 ">{{$company->email}}</span></p>

								<p class="text-muted mb-1 "><strong class="text-info">Location :</strong> <span class="ms-2">{{$company->address}}</span></p>
							</div>

							<ul class="social-list list-inline mt-3 mb-0">
								<li class="list-inline-item">
									<a href="javascript: void(0);" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook-light"><i class="fa fa-facebook"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="javascript: void(0);" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter-light"><i class="fa fa-twitter"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="javascript: void(0);" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-google-light"><i class="fa fa-google"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="javascript: void(0);" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram-light"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div> <!-- end card-body -->
					</div> <!-- end card -->

					<!-- Messages-->
				

				</div> <!-- end col-->

				<div class="col-xl-7 col-lg-7">
				<div class="card">
						<div class="card-header">
							<h5 class="card-title">Package Plan Purchase record </h5>
						
						</div>						
						<div class="card-body">
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
											<th scope="col">Heading</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
											<td class="text-fade">Cell</td>
										</tr>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
					</div> <!-- end card -->
				</div> <!-- end col -->
			</div>
			<!-- end row-->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  
  
   <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  @endsection
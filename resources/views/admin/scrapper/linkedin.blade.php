@extends('layout.admin')
@section('title','Affilly')
@section('content')
<div class="content-wrapper" style="min-height: 1091px;">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
				  <div class="box row">
					<div class="box-header">
					    <div class="h4">
				            Scrape Jobs From Linkedin 
					    </div>
					</div>
					<div class="box-body d-flex justify-content-center">
                        <form action="{{ url('scrapper/scrape') }}" method="POST" class="col-9">
                            @csrf
                    		<div class="form-group">
							  <label>Job Title</label>
							  <input type="text" name="title" class="form-control" placeholder="Title: Web Developer">
							  <input type="hidden" name="source"  value="linkedin">
							</div>
							<div class="form-group">
							  <label>Job Location</label>
							  <input type="text" name="location" class="form-control" placeholder="Location: Pakistan">
							</div>
							<div class="form-group">
							  <label>Page Number</label>
							  <input type="text" name="page" class="form-control" placeholder="Page: 1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
							</div>
							<div class="form-group">
                                <input type="submit" class="btn  btn-primary btn-outline" value="Scrape" />
							</div>
                        </form>
					</div>
				  </div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  @endsection
@extends('layout.employer')
@section('title','Affilly')
@section('content')
<div class="content-wrapper" style="min-height: 1091px;">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			  <div class="row">
    <div class="col-12 mx-auto ">
      <div class="card card-custom">
        <div class="card-body card-body-custom">


          <div class="row">
            <div class="col-md-12 text-center">
              <h1 class=" ">Posting Plans - Rate Card</h1>
            </div>
          </div>
          <div class="row mt-5">
           
          <div id="max_rates mt-5">
            <div class="row row-cols-1 row-cols-md-3">
                
            @if($packages)
            @foreach($packages as $package)
                
              <div class="col">
                <div class="card card-custom card-hover border" style="border: 2px solid #ddd!important;">
                  <div class="card-header card-header-custom text-center border-bottom bg-transparent mt-2">
                    <div class="text-uppercase"> <label class="form-check-label fw-bold m-0" for="product_7">{{$package->name}}</label></div>
                    <h3 class="text-dark" style="font-weight: 800;">${{$package->price}}</h3>
                  </div>
                  <div class="card-body card-body-custom p-0">
                    <div class="table-responsive-sm">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="px-4 fw-bold" scope="row">Jobs</td>
                            <td>{{$package->jobs}}</td>
                          </tr>
                          <tr>
                            <td class="px-4 fw-bold" scope="row">CV's</td>
                            <td>{{$package->cv}}</td>
                          </tr>
                          <tr>
                            <td class="px-4 fw-bold" scope="row">Time period</td>
                            <td>{{$package->time_duration}}&nbsp;Days</td>
                          </tr>
                          <tr>
                            <td class="px-4 fw-bold border-bottom-0" scope="row">Price</td>
                            <td class="border-bottom-0">${{$package->price}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-center bg-transparent py-3 border-top">
                    <form name="rates" action="https://remotephase.com/gift.php" method="get">
                      <input type="hidden" name="product_id" value="7" id="product_7" class="">
                      <a href="{{url('buy_package/'.$package->id)}}" class="btn btn-primary">Buy Now</a>
                    </form>
                  </div>
                </div>
              </div>
            @endforeach
            @endif
              
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
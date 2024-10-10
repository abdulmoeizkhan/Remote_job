@extends('layout.admin')
@section('content')
<div class="content-wrapper" style="min-height: 566.5px;">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-5 me-1">Billing History</h4>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-12">
				  <div class="box">
					<div class="box-body">
						<div class="table-responsive">
						  <table class="table mb-0">
							  <thead class="thead-light">
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">Plan</th>
								  <th scope="col">Start Date</th>
								  <th scope="col">End Date</th>
								  <th scope="col">Amount</th>
								  <th scope="col">Status</th>
								</tr>
							  </thead>
							  <tbody class="text-fade">
								<tr>
								  <th scope="row">868712</th>
								  <td>Yearly Subscription</td>
								  <td>1/12/2021</td>
								  <td>30/11/2022</td>
								  <td>$999</td>
								  <td><span class="badge badge-sm badge-danger-light">Due</span></td>
								</tr>
								<tr>
								  <th scope="row">458791</th>
								  <td>Monthly Subscription</td>
								  <td>1/11/2021</td>
								  <td>30/11/2021</td>
								  <td>$444</td>
								  <td><span class="badge badge-sm badge-success-light">Paid</span></td>
								</tr>
								<tr>
								  <th scope="row">345871</th>
								  <td>Week Subscription</td>
								  <td>1/01/2022</td>
								  <td>07/01/2022</td>
								  <td>$233</td>
								  <td><span class="badge badge-sm badge-success-light">Paid</span></td>
								</tr>
								<tr>
								  <th scope="row">147852</th>
								  <td>Day Subscription</td>
								  <td>25/01/2022</td>
								  <td>26/01/2022</td>
								  <td>$150</td>
								  <td><span class="badge badge-sm badge-success-light">Paid</span></td>
								</tr>
								
							  </tbody>
							</table>
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
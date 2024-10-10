@extends('front_layout')
@section('header')

    <section id="" class="features">

<div class="container mt-3 pt-4">
    <div class="row align-items-end mb-4 pb-2">

     
    </div><!--end row-->

    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <h5>Web Designer</h5>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                        <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> USA</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        @foreach($companies as $com)
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <h5>Web Designer</h5>
                    <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa fa-home" aria-hidden="true"></i> <a href="#" target="_blank" class="text-muted">Bootdey.com LLC.</a></span>
                        <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i> USA</span>
                    </div>
                    
                    <div class="mt-3">
                        <a href="{{url('job-by-company')}}/{{$com->id}}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
            @endforeach
        
        
    </div><!--end row-->
</div>
                  
						<!--@foreach($companies as $com)-->
						<!--<div class="box pull-up col-3 ">-->
						<!--		<div class="box-body border border-secondary-light m-1 p-2 ">-->
						<!--			<div class="d-md-flex align-items-center">-->
						<!--				<div class="mx-15">-->
						<!--					<img style='width:100px' src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsmMIYd4iaGD-mwouZCSgcEQA2vkeCud7ZMwpr-QPaAQ&s" class="img-fluid max-w-80" alt="">-->
						<!--				</div>-->
						<!--				<div class="d-flex w-p100 d-block justify-content-between align-items-center">-->
						<!--					<div>-->
											
						<!--					</div>-->
						<!--					<div class="text-md-right">-->
						<!--						<p class="mb-40">Singapore</p>-->
						<!--						<a href="{{url('job-by-company')}}/{{$com->id}}" class="text-primary">VIEW Jobs</a>-->
						<!--					</div>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--@endforeach-->
						
				
              

                




              



             


                



              </div>




             

            </div>





     
      
    
  

    
    </section><!-- End App Features Section -->

  
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Remote Phase</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        <!-- &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('langingPage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('langingPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('langingPage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('langingPage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('langingPage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('langingPage/assets/js/main.js')}}"></script>

</body>

</html>

@endsection
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cleaning Company - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	<script src="https://kit.fontawesome.com/fbc65d9e88.js" crossorigin="anonymous"></script>
		@include('nav/nav')
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trans.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cara Bayar <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Kami menyediakan Cara Pembayaran yang mudah untuk Diakses & Digunakan</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Payment &amp; Methods</span>
            <h2>Choose Your Payment Methods</h2>
          </div>
        </div>
		
    		<div class="row ftco-animate">
				<div class="col-md-12" s>
					
				
				@foreach ($collection = DB::table('carabayar')->get() as $item)
        @if ($item->isDeleted == 'N')
            
				<div class="item mb-5">
          
          <div class="testimony-wrap py-4" style="background-color: #0f7fd9">
            <div class="icon d-flex align-items-center justify-content-center"></div>
            <div class="text">
              <div class="d-flex align-items-center mb-4">
                <div class="pl-3">
                  <p class="name">{{ $item->carabayar }}</p>
                </div>
              </div>
              <p class="mb-1">{{ $item->keterangan }}</p>
            </div>
          </div>
        </div>
        @endif
				@endforeach
    			
			</div>
	       
	        </div>
	        
	      </div>
    	</div>
    </section>

    @include('nav/footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
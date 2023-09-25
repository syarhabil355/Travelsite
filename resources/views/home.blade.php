<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TravelSite || Homepage</title>
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
		@include('nav.nav')
    <!-- END nav -->
	@foreach ($home as $beranda)
    <div class="hero-wrap js-fullheight" style="background-image: url('images/back2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading">{{ $beranda->subheading }}</h2>
          	<h1 class="mb-4">{{ $beranda->heading }}</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb mt-5">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-items-center justify-content-center py-5 py-md-0" style="background-image:url(images/backpacker.jpg);">
    					<div class="time-open-wrap">
    						<div class="desc p-4">
		    					<h2>Business Hours</h2>
			              <div class="opening-hours">
			              	<h4>Opening Days:</h4>
			              	<p class="pl-3">
			              		<span><strong>Monday – Friday:</strong> {{ $beranda->weekday_opening }} to {{ $beranda->weekday_closing }}</span>
			              		<span><strong>Saturday - Sunday:</strong> {{ $beranda->weekend_opening }} to {{ $beranda->weekend_closing }}</span>
			              	</p>
			              	<h4>Vacations:</h4>
			              	<p class="pl-3">
			              		<span>All Sunday Days</span>
			              		<span>All Official Holidays</span>
			              	</p>
			              </div>
		    				</div>
								<div class="desc p-4 bg-secondary">
									<h3 class="heading">For Emergency Cases</h3>
									<span class="phone">(+62) 857 1224 2335</span>
								</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 pt-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Travelling Company</span>
		            <h2 class="mb-4">{{ $beranda->content_title }}</h2>
		            <p>{{ $beranda->content }}</p>
		          </div>
		        </div>
						<div class="row ftco-counter py-5" id="section-counter">
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number='{{ $beranda->experience }}'>0</strong>
		              </div>
		              <div class="text">
		              	<span>Years of <br>Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number='{{ $beranda->customers }}'>0</strong>
		              </div>
		              <div class="text">
		              	<span>Happy <br>Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number='{{ $beranda->travel_held }}'>0</strong>
		              </div>
		              <div class="text">
		              	<span>Travel <br>Held</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2>How We Works</h2>
          </div>
        </div>
    		<div class="row">

			@foreach ($works = DB::table('works')->get(); as $w)
			@if ($w->isDeleted == 'N')
				<div class="col-md-6 col-lg-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon"><i class="{{ $w->icon }}"></i></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">{{ $w->work_title }}</h3>
                <p>{{ $w->work_content }}</p>
              </div>
            </div>
          </div>
			@endif
          
			@endforeach
    </section>

    <section class="ftco-section ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
						<div class="heading-section ftco-animate text-center text-lg-left">
	          	<span class="subheading">Team &amp; Staff</span>
	            <h2>{{ $beranda->team_title }}</h2>
	            <p>{{ $beranda->team_content }}</p>
	          </div>
					</div>


					@foreach ($team = DB::table('team')->get(); as $s)
					@if ($s->isDeleted == 'N')
					<div class="col-md-4 col-lg-3 ftco-animate d-flex">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/staff/{{ $s->staff_img }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>{{ $s->staff_name }}</h3>
								<span class="position mb-2">{{ $s->position }}</span>
								<div class="faded"></div>
							</div>
						</div>
					</div>
					@endif
					@endforeach


					
					
				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section ftco-bg-dark">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Testimonies</span>
            <h2>Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">

				@foreach ($customers = DB::table('customers')->get(); as $item)
				@if ($item->isDeleted == 'N')
				<div class="item">
                	<div class="testimony-wrap py-4">
                		<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-right"></span></div>
                  		<div class="text">
                  			<div class="d-flex align-items-center mb-4">
                    			<div class="user-img" style="background-image: url(images/customers/{{ $item->pp }})"></div>
                    			<div class="pl-3">
		                    		<p class="name">{{ $item->customers_name }}</p>
		                    		<span class="position">{{ $item->position }}</span>
		                  		</div>
	                  		</div>
                    		<p class="mb-1">{{ $item->comment }}</p>
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
		
		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-12 heading-section  text-center ftco-animate">
          	<span class="subheading">Our Project</span>
            <h2>We have done many latest Travel and Shipping project</h2>
          </div>
        </div>
		<div class="row">
			@foreach ($project = DB::table('project')->get(); as $item)
				@if ($item->isDeleted == 'N')
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="work img d-flex align-items-center" style="background-image: url(images/project/{{ $item->project_img }});">
            	<a href="images/project/{{ $item->project_img }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="{{ $item->project_logo }}"></span>
	    				</a>
            	<div class="desc w-100 px-4 text-center pt-5 mt-5">
	              <div class="text w-100 mb-3 mt-4">
	              	<h2><a href="work-single.html">{{ $item->project_title }}</a></h2>
	              </div>
              </div>
            </div>
          </div>
		  @endif
		  @endforeach
        </div>
			</div>
			<br>
		</section>	
		@endforeach
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
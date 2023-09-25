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
  	<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col-12 col-md d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+62 857-1224-2335</a> or <span class="mailus">email us:</span> <a href="#">travelsite@gmail.com</a></p>
						</div>
						<div class="col-12 col-md d-flex justify-content-md-end align-items-center">
							<div class="col-6 col-md d-flex justify-content-md-end align-items-center">
								@if (Auth::check())
									<div style="width: 500px; height: 45px;">
										<p style="color: white;float: left;margin-left: 300px" class="pt-2"><i class="fa-regular fa-user"></i> {{ Auth::user()->name }} </p>
										@if (Auth::user()->level == 'ADMIN')
										<div class="dropdown">
											<button style="background:none; border: none; color: white" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											  <a class="dropdown-item" href="admin">Dashboard</a>
											  <a class="dropdown-item" href="cosukses">Riwayat Tiket</a>
											</div>
										  </div>
										@else
										<div class="dropdown">
											<button style="background:none; border: none; color: white" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											  <a class="dropdown-item" href="cosukses">Riwayat Tiket</a>
											</div>
										  </div>
										@endif
										<button class="pt-2" type="submit" style="background: none; border: none;color: white;float: left;"></button>
			  						
									</div>
			  					@else
								  	<div style="width: 500px; height: 45px;">
			  							<a href="login" style="color: white;float: left;margin-left: 400px" class="pt-2"><p style="color: white" class=""><i class="fa-regular fa-user"></i> Login</p></a>
									</div>
			  					@endif
							</div>
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			
								
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light mt-3" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">Travel<span>Site</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item {{ ($title === "home") ? 'active' : ''  }}"><a href="home" class="nav-link ">Home</a></li>
	        	<li class="nav-item {{ ($title === "cekjadwal") ? 'active' : ''  }}"><a href="cekjadwal" class="nav-link">Cek Jadwal</a></li>
	        	<li class="nav-item {{ ($title === "lokasi") ? 'active' : ''  }}"><a href="lokasi" class="nav-link ">Lokasi</a></li>
	        	<li class="nav-item {{ ($title === "carabayar") ? 'active' : ''  }}"><a href="carabayar" class="nav-link">Cara Bayar</a></li>
	          	<li class="nav-item {{ ($title === "contact") ? 'active' : ''  }}"><a href="contact" class="nav-link">Kontak</a></li>
				@if (Auth::check())
					<form action="logout" method="POST">
					{{ csrf_field() }}
					<li class="nav-item"><button class="nav-link mt-3" type="submit" style="background: none; border: none;color: white;float: left;font-size: 18px">Log Out</button></li>
				</form>
				@endif
				
					
			  
	        </ul>
	      </div>
		  
	    </div>
	  </nav>
 </body>
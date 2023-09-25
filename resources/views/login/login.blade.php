<!doctype html>
<html lang="en">
  <head>
  	<title>Login || Travelsite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/stylelogin.css">

	</head>
	<body style="background: rgb(15,127,217);
	background: linear-gradient(90deg, rgb(15,127,217) 0%, #0a5592 100%);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/login.jpeg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Travel Site Sign In</h3>
			      		</div>
								<div class="w-100">
									
								</div>
			      	</div>
							<form action="loginPost" class="signin-form" method="POST">
								{{ csrf_field() }}
			      		<div class="form-group mb-3">
			      			<label class="label" for="email">E-mail</label>
			      			<input type="text" class="form-control" placeholder="E-mail" required name="email">
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" required name="password">
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	
									  
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="/">Back to Homepage</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a href="register">Register</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


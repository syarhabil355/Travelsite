<!doctype html>
<html lang="en">
  <head>
  	<title>Register || Travelsite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/stylelogin.css">

	</head>
	<body style="background: rgb(15,127,217);
	background: linear-gradient(90deg, rgb(15,127,217) 0%, rgb(15,127,217) 100%);">
	<section class="ftco-section" style="padding: 2em">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/regis.jpeg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Travel Site Register Account</h3>
			      		</div>
						<div class="w-100"></div>
								
			      	</div>
							<form action="register" class="signin-form" method="POST">
								{{ csrf_field() }}
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input type="text" class="form-control" placeholder="Username" required name="name">
								</div>
			      		<div class="form-group mb-3">
			      			<label class="label" for="email">E-mail</label>
			      			<input type="email" class="form-control" placeholder="E-mail" required name="email">
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="********" required name="password">
		            </div>
					<div class="form-group mb-3">
						<label class="label" for="notelp">Jenis Kelamin</label><br>
						<input type="radio" class="ml-2" name="jenkel" value="Laki-laki"> Laki - laki
						<input type="radio" class="ml-2" name="jenkel" value="Perempuan"> Perempuan
						<input type="radio" class="ml-2" name="jenkel" value="Lainnya"> Lainnya
					</div>
					<div class="form-group mb-3">
						<label class="label" for="notelp">No Telp</label>
						<input type="number" class="form-control" placeholder="+62 800 0000" required name="notelp">
					</div>
					<div class="form-group mb-3">
						<label class="label" for="alamat">Alamat</label>
						<input type="text" class="form-control" placeholder="Alamat" required name="alamat">
						<input type="hidden" name="level" value="USER">
					</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Register Account</button>
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
		          <p class="text-center">Already have an Account ? <a href="login">Login</a></p>
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
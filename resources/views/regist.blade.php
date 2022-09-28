<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
	* {font-family: 'Montserrat', sans-serif;}

	body {background-color: #eee;}

	.form-control {
		border: none;
		border-bottom: 1px solid grey;
		border-radius: 0;
	}
</style>
<body>
<form action="/regist" method="post">
	@csrf
	<section class="vh-100">
  		<div class="container">
    		<div class="row d-flex justify-content-center align-items-center">
      			<div class="col-lg-12 col-xl-11">
        			<div class="card text-black" style="border-radius: 25px;">
          				<div class="card-body p-md-5">
            				<div class="row justify-content-center">
              					<div class="col-md-10 col-lg-6 col-xl-5 order-2">
									<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Register</p>
               					
               						<form class="mx-1 mx-md-4">
					                  	<div class="d-flex flex-row align-items-center mb-4">
					                    	<div class="form-outline flex-fill mb-0">
					                      		<input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" />
					                    	</div>
					                 	</div>

					                 	<div class="d-flex flex-row align-items-center mb-4">
					                    	<div class="form-outline flex-fill mb-0">
					                      		<input type="text" name="username" id="username" class="form-control" placeholder="Username" />
					                    	</div>
					                 	</div>

						                <div class="d-flex flex-row align-items-center mb-4">
						                    <div class="form-outline flex-fill mb-0">
						                      	<input type="email" name="email" id="email" class="form-control" placeholder="Email" />
						                    </div>
						                </div>

					                  	<div class="d-flex flex-row align-items-center mb-4">
					                    	<div class="form-outline flex-fill mb-0">
					                      		<input type="password" name="password" id="password" class="form-control" placeholder="Kata Sandi" />
					                    	</div>
					                  	</div>

					                  	<div class="d-flex justify-content-end">
					                  		<p>Have an account? &nbsp;</p>
					                  		<a href="<?= url('/login'); ?>">Login</a>
					                  	</div>

					                  	<div class="d-flex justify-content-center">
					                    	<button type="submit" class="btn btn-primary btn-lg" style="margin-top: 80px;">Register</button>
					                  	</div>
               						</form>
              					</div>
				              	<div class="col-xl-7 d-flex align-items-center order-1">
				                	<img src="/2.png" style="max-width: 100%;">
				              	</div>
            				</div>
          				</div>
        			</div>
      			</div>
    		</div>
  		</div>
	</section>
</form>
</body>
</html>
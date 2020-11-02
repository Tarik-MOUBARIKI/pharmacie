


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="https://kit.fontawesome.com/f87defdbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/login.css">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
 
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"> MTPHARMACIE
    </a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" ></i></a>
      </li>
    </ul>
  </nav>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="login.php" method="POST" class="login100-form">
					<span class="login100-form-title p-b-32">
						Admin Login
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text"  name="username" required >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12">
						<!-- <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span> -->
						<input class="input100" type="password" name="pass" required >
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
					</div>
                    

					

				</form>
                                        
			</div>
		</div>
	</div>


</body>
</html>



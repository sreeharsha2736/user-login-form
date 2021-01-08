<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: welcome.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
	<title>FORM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<!-- custom CSS -->
    <link rel=" stylesheet " href="./assets/css/index.css ">


</head>

<body>
	<div class="container" style="margin-top:12rem">
		<div class="row">
        <!--alert-danger-->
			<div class="col-md-12 ">
				<div class="alert alert-danger">
					<div id="result"></div>
				</div>
			</div>
			</div>



             <!--sign-up-->
			 <div class="row">
			<div class="col-md-12  sign-up">
				<div class="panel container">
					<div class="panel-heading">
						<h3 class="panel-title text-center">SIGN UP</h3>
					</div>
					<div class="panel-body">
						<form action="" class="form-horizontal" id="sign-up-form" role="form">
							<div class="form-group">
								<label for="fullName">Full name : </label>
								<div class="input-group">
										<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name">
								</div>
							</div>
							<div class="form-group">
							<label for="mobileNumber">Mobile number: </label>
								<div class="input-group">
										<input type="text" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Mobile Number">
								</div>
							</div>
							<div class="form-group">
							<label for="email">Email Address : </label>
								<div class="input-group">
								   
										<input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
								</div>
							</div>
							<div class="form-group">
							<label for="password">Password : </label>
								<div class="input-group">
                                  
										<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
							<label for="confirmPassword">Re-enter Password : </label>
								<div class="input-group">
									
										<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" style="background-color: rgb(98, 98, 172);" id="register" class="btn  btn-block">Register now</button>
							</div>
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top:1px solid #888; padding-top:15px; font-size:85%">
										Already have account!
										<a href="#" onclick="$('.sign-up').hide(); $('.sign-in').show()">Sign In</a>
									</div>
								</div>
							</div>
                        </form>
					</div>
				</div>
			
			</div>
		

















</div>
	</div>
	



		 <!--sign-IN-->
		<div class="row">
			<div class="col-md-12  sign-in">
				<div class="panel container">
					<div class="panel-heading">
						<h3 class="panel-title text-center font-weight-bold">SIGN IN</h3>
					</div>
					<div class="panel-body">
						<form action="" class="form-horizontal" id="sign-in-form">
							<div class="form-group">
							<label for="email">Email Address : </label>
								<div class="input-group">
									<input type="text" class="form-control" id="mail" name="mail" placeholder="Email Address">
								</div>
							</div>
							<div class="form-group">
							<label for="pwd">Password: </label>
								<div class="input-group">
									<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
								</div>
							</div>
							
							<div class="form-group">
								<button style="background-color: rgb(98, 98, 172);" type="submit"  id="login" class="btn  btn-block">login</button>
							</div>
							<br>
                          
							<div class="form-group"style="border-top:1px solid #888; padding-top:15px; font-size:85%">
								<div class="col-md-12 control">
									<div class="d-inline" >
										Don't have an account?
										<a href="#" onclick="$('.sign-in').hide(); $('.sign-up').show()">Sign Up</a>
                                     <br> 
                                    
                                     
                                    </div>
								</div>
							</div>
							
                        </form>
					</div>
				</div>
			</div>
	

	</div>
		<!-- custom js -->
      
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script rel="text/javascript" src="./assets/js/main.js"></script> 
		<script src="./assets/js/sweetalert.js"></script>

</body>

</html>

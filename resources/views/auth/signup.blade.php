<?php
// require 'partials/_dbConnection.php';
// $path = "partials/dbConnection.php";

// echo "Path : $path";

// require "$path";
// @include('partials/_dbConnection.php')


// $server = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'charity_protagonist';

// $connection = mysqli_connect($server, $username, $password, $database);

// $mysqli = new mysqli("localhost", "root", "", "charity_protagonist") or die(mysqli_error($mysqli));

// if (!$connection){
// //     echo "success";
// // }
// // else{
//     die("Error". mysqli_connect_error());
// }

// if($_SERVER["REQUEST_METHOD"]== 'POST'){
// 	$name = $_POST["name"];
// 	$email = $_POST["email"];
// 	$phone_no = $_POST["phone_no"];
// 	$username = $_POST["username"];
// 	$st_date = $_POST["st_date"];
// 	$org_size = $_POST["org_size"];
// 	$password = $_POST["password"];
// 	$sponsor = $_POST["sponsor"];

// 	$sql = "INSERT INTO `charity_user` (`id`, `name`, `email`, `phone_no`, `username`, `starting_dt`, `org_size`, `password`, `sponsor`, `cur_date`) VALUES (NULL, '$name', '$email', '$phone_no', '$username', '$st_date', '$org_size', '$password', '$sponsor', current_timestamp())";

// 	$result = mysqli_query($connection, $sql);
// 	if($result){
// 		echo "success";
// 	}
// 	else{
// 		echo "false";
// 	}
// }




?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,300;1,400;1,600&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
	
		<!-- custom css part  -->
	<!-- <link rel="stylesheet" type="text/css" href="signupStyle.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/homepage/signupStyle.css')}}" />


	<title>Form validation</title>
</head>

<body
	style="background-repeat: no-repeat; background-size: 100% 100%;  width: 100%;">

	<section class="bg">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-12 col-md-8 col-lg-6">
					<div class="form-wrap">
						<div class="form-heading">
							<h1>Registration Form</h1>
							<p>Enter your Organization's Data</p>
						</div>
						
						<form action="{{ route('auth.save') }}" method="post" id="regForm">

						@if(Session::get('Success'))
							<div class="alart alart-success">
								{{ Session::get("Success")}}
							</div>
						@endif

						@if(Session::get('Fail'))
							<div class="alart alart-danger">
								{{ Session::get("Fail")}}
							</div>
						@endif

							@csrf
							<div class="form-group">
								<label>Name: </label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								<p id="p1"></p>
							</div>
							<div class="form-group">
								<label>Email: </label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								<p id="p2"></p>
							</div>
							<div class="form-group">
								<label>Phone No: </label>
								<input type="number" class="form-control" id="phone_number" name="phone_no"
									placeholder="Phone Number">
								<p id="p3"></p>
							</div>
							<div class="form-group">
								<label>Username: </label>
								<div class="d-flex">
									<span class="input-group-text" id="addon-wrapping">@</span>
									<input type="text" class="form-control" id="username" name="username"
										placeholder="Username">
								</div>
								<p id="p4"></p>
							</div>
							<div class="form-group">
								<label>Starting Date: </label>
								<input type="date" class="form-control" id="starting_date" name="st_date"
									placeholder="Starting date">
								<p id="p5"></p>
							</div>
							<div class="form-group">
								<label>Organization Size: </label>
								<select name="org_size" class="form-select w-100 form-control" id="select">
									<option selected>Select</option>
									<option class=" " value="1">Small</option>
									<option class=" " value="2">Medium</option>
									<option class=" " value="3">Large</option>
								</select>
								<p id="p6"></p>
							</div>

							<div class="form-group">
								<label>Password: </label>
								<input type="password" class="form-control" id="password" name="password"
									placeholder="Password">
								<small class="pass_instruction">must be 8 to 10 charecters including a uppercase letter
									and digit</small>
								<p id="p7"></p>
							</div>
							<div class="form-group">
								<label>Sponsor (If any): </label>
								<textarea name="sponsor" class="form-control" aria-label="With textarea"></textarea>
								<p id="p8"></p>
							</div>

							<div class="form-group">

								<input type="submit" name="save" class="btn btn-primary btn-block" id="submit">

							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script>
		$(document).ready(function () {
			$("#submit").click(function () {
				var name = $("#name").val();
				var email = $("#email").val();
				var password = $("#password").val();
				var phone_number = $("#phone_number").val();
				var username = $("#username").val();
				var starting_date = $("#starting_date").val();
				var select = $("#select").val();




				if (name.length == "") {
					$("#p1").text("Please enter your name");
					$("#name").focus();
					return false;
				}
				else if (email.length == "") {
					$("#p2").text("Please enter your email address");
					$("#email").focus();
					return false;
				}
				else if (phone_number.length == "") {
					$("#p3").text("Please enter your phone number");
					$("#phone_number").focus();
					return false;
				}
				else if (username.length == "") {
					$("#p4").text("Please enter your username");
					$("#username").focus();
					return false;
				}

				else if (starting_date.length == "") {
					$("#p5").text("Please enter your organization's starting date");
					$("#starting_date").focus();
					return false;
				}
				else if (select.length == "") {
					$("#p6").text("Please select your organization's size");
					$("#select").focus();
					return false;
				}
				else if (password.length == "") {
					$("#p7").text("Please enter your password");
					$("#password").focus();
					return false;
				}

				else {
					var con = confirm("Are you Done?");
					if (con == true) {
						alert("Welcome to our Website");
						return true;
					}
					else {
						return false;
					}
				}
			});
		});


	</script>



</body>

</html>
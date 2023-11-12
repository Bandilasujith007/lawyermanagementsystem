<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title>Log In here</title>
<style>
  .has-error .help-block {
  color: red;
}
.bg-success {
    background-color: #244065!important;
}
.btn-success {
    color: #fff;
    background-color: #244065;
    border-color: #244065;
}
  </style>
	</head>
	<body>
		<header class="customnav bg-success">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="#">Lawyer Management System</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php"> <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php"></a><!--lawyers.html page-->
									</li>
									<li class="">
										<a class="nav-link cus-a" href="#"></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="login.php"></a>
									</li>
									<li class="nav-item dropdown">
										<!-- <a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
											
										<!-- </a> -->
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="lawyer_register.php"></a><!--redirect lawyer register page-->
											<a class="dropdown-item" href="user_register.php"></a><!--redirect user register page-->

										</div>
									</li>


								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section class="registerform">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Hello Lawyer <i class="fas fa-user-tie"></i> !!</h1>
						<!-- <h2>please register your self here <i class="fas fa-hand-point-right"></i></h2> -->
					</div>
					<div class="col-md-6">
						<form  action="lawyer_registation.php"  method="POST" enctype="multipart/form-data"  id="validateForm">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="fname">First Name</label>
									<input type="text" class="form-control" id="first_Name" name="first_Name" placeholder="first name">
								</div>
								<div class="form-group col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control" id="lname" name="last_Name" placeholder="last name">
								</div>
							</div>

							<div class="form-group">
								<label for="num">Contact Number</label>
								<input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="contact number">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email address">
							</div>
							<div class="form-group">
								<label for="email">Password</label>
								<input type="password" class="form-control" id="email" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="num">Image</label>
								<input type="file" class="form-control" name="image" id="image">
							</div>.
							<div class="form-row"><label for="edu"><small style="font-size:20px;color:#232358">Put Your Last Education</small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="institute">University / College Name</label>
									<input type="text" class="form-control" id="institute" name="university_College" placeholder="Institute name">
								</div>
								<div class="form-group col-md-3">
									<label for="degree">Degree</label>
									<select id="degree" name="degree" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="LLB">LLB</option>
										<option value="LLM">LLM</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="pyear">Passing Year</label>
									<select id="passing_year" name="passing_year" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2016">2020</option>
										<option value="2017">2021</option>
										<option value="2018">2022</option>
										<option value="2019">2023</option>
									</select>
								</div>
							</div>
							<div class="form-row"><label for="edu"><small style="font-size:20px;color:#232358">Put Your chamber Location </small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="address">Full Address</label>
									<input type="text" class="form-control" id="address" name="full_address" placeholder="full address">
								</div>
								<div class="form-group col-md-3">
									<label for="city">City</label>
									<select id="city" name="city" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="chennai">Chennai</option>
										<option value="thirupathi">Thirupathi</option>
										<option value="bangalore">Bangalore</option>
										<option value="mumbai">Mumbai</option>
										<option value="agra">Agra</option>
										<option value="kolkatta">Kolkatta</option>
										<option value="delhi">Delhi</option>
										<option value="bhopal">Bhopal</option>
								</select>
								</div>
								<div class="form-group col-md-3">
									<label for="zip">Zip code</label>
									<input type="text" class="form-control" id="zip" name="zip_code" placeholder="zip code">
								</div>
							</div>
							<div class="form-group">
								<label for="practise">Length of practise</label>
								<select id="practise" name="practise_Length" class="form-control">
									<option value=" " selected>Choose...</option>
									<option value="1-5 years">1-5 years</option>
									<option value="6-10 years">6-10 years</option>
									<option value="11-15 years">11-15 years</option>
									<option value="16-20 years">16-20 years</option>
									<option value="Most Senior">Most Senior</option>
								</select>
							</div>
							<div class="form-group">
								<!--a lawyer can choose 5 category at max-->
								<label for="speciality">Types of case handle</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle"  value="Criminal lawyer" id="crime">
									<label class="form-check-label" for="crime">
										Criminal lawyer
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle" value="Civil lawyer" id="civil">
									<label class="form-check-label" for="civil">
										Civil lawyer
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle" value="family lawyer" id="civil">
									<label class="form-check-label" for="civil">
									family lawyer
									</label>
								</div>
								
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle"  value="Divorce lawyer" id="oth">
									<label class="form-check-label"  for="oth">
										Divorce lawyer
									</label>
								</div>
							</div>
							
							
							
							<input type="submit" class="btn btn-block btn-success" value="Register"  style=" background-color: #244065; border-color:#244065;" />
							<!--after signup redirect lawyer dashboard page-->
						</form>
					</div>
				</div>
			</div>
		</section>
		

	</body>
</html>
